<?php

namespace Model;

use Database\Factory\QueryBuilder;

class User extends Model
{
	function __construct(){
		$this->table = 'user';
		$this->primary_key = 'id';
	}

	static function get_ativos(){
		$users = (new QueryBuilder('usuario'))
		->select('usuario_nome','usuario_id')
		->where('usuario_status = 1')
		->get();

		return $users;
	}
}
?> 