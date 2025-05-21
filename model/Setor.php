<?php

namespace Model;

use Database\Factory\QueryBuilder;

class Setor extends Model
{
	function __construct(){
		$this->table = 'setor';
		$this->primary_key = 'id';
	}

	static function get_for_usuario(): array|null{
		$setores = (new QueryBuilder('setor'))
		->select('id','nome')
		->get();

		return $setores;
	}
}
?> 