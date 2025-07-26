<?php

namespace Model;

use Database\Factory\QueryBuilder;

class Chamado extends Model
{
	/** 
	 * @var string Expressão SQL que converte a prioridade numérica em texto 
	 * (para uso em instruções SELECT)
	 */
	private static string $prioridade_nome = "CASE 
		WHEN prioridade = 1 THEN 'Baixa'
		WHEN prioridade = 2 THEN 'Média' 
		WHEN prioridade = 3 THEN 'Alta' 
		WHEN prioridade = 4 THEN 'Altissima' 
		ELSE 'Erro' END AS prioridade_nome ";

	/** 
	 * @var string Expressão SQL que converte o status numérico em texto 
	 * (para uso em instruções SELECT)
	 */
	private static string $status_nome = "CASE
		WHEN `status` = 1 THEN 'Aberto'
		WHEN `status` = 2 THEN 'Em atendimento' 
		WHEN `status` = 3 THEN 'Fechado' 
		ELSE 'Erro' END AS status_nome ";

	function __construct(){
		$this->table = 'chamado';
		$this->primary_key = 'id';
	}

	static function getTeste($filter = ''): array|null{
		$prioridade_nome = self::$prioridade_nome;
		$status_nome = self::$status_nome;
		
		$data = (new QueryBuilder('chamado'))
		->select('chamado.id','chamado.assunto','chamado.prioridade','chamado.status','setor_solicitante.nome AS setor_solicitante_nome','usuario_solicitante.nome AS usuario_solicitante_nome', $prioridade_nome, $status_nome)
		->join('user AS usuario_solicitante','usuario_solicitante.id = chamado.usuario_solicitante')
		->join('setor AS setor_solicitante','setor_solicitante.id = chamado.setor_solicitante')
		->where($filter)
		->get();

		return $data;
	}
	static function getById(int $id){
		$prioridade_nome = self::$prioridade_nome;
		$status_nome = self::$status_nome;
		
		$data = (new QueryBuilder('chamado'))
		->select('chamado.id','chamado.assunto','chamado.desc','chamado.prioridade','chamado.status','setor_solicitante.nome AS setor_solicitante_nome','usuario_solicitante.nome AS usuario_solicitante_nome','setor_atendente.nome AS setor_atendente_nome','usuario_atendente.nome AS usuario_atendente_nome', $prioridade_nome, $status_nome)
		->join('user AS usuario_solicitante','usuario_solicitante.id = chamado.usuario_solicitante')
		->join('setor AS setor_solicitante','setor_solicitante.id = chamado.setor_solicitante')
		->join('user AS usuario_atendente','usuario_atendente.id = chamado.usuario_atendente', 'LEFT')
		->join('setor AS setor_atendente','setor_atendente.id = chamado.setor_atendente', 'LEFT')
		->where("chamado.id = $id")
		->get();
		
		$data = (isset($data[0]->id)) ? $data[0] : null;

		return $data;
	}
}
?> 