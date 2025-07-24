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
		->select('chamado.id','chamado.assunto','setor_solicitante.nome AS setor_solicitante_nome','usuario_solicitante.nome AS usuario_solicitante_nome', $prioridade_nome, $status_nome)
		->join('user AS usuario_solicitante','usuario_solicitante.id = chamado.usuario_solicitante')
		->join('setor AS setor_solicitante','setor_solicitante.id = chamado.setor_solicitante')
		->where($filter)
		->get();

		return $data;
	}
}
?> 