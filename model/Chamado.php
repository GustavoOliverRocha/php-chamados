<?php

namespace Model;

class Chamado extends Model
{
	function __construct(){
		$this->table = 'chamado';
		$this->primary_key = 'id';
	}
}
?> 