<?php

namespace Model;

use Database\Factory\QueryBuilder;

class Chamado extends Model
{
	function __construct(){
		$this->table = 'chamado';
		$this->primary_key = 'id';
	}

	static function getTeste(): array|null{
		$data = (new QueryBuilder('chamado'))
		->select('chamado.id','chamado.assunto','setor_solicitante.nome AS setor_solicitante_nome','usuario_solicitante.nome AS usuario_solicitante_nome')
		->join('user AS usuario_solicitante','usuario_solicitante.id = chamado.usuario_solicitante')
		->join('setor AS setor_solicitante','setor_solicitante.id = chamado.setor_solicitante')
		->get();

		return $data;
	}
}
?> 