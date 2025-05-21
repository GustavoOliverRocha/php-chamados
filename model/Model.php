<?php 

namespace Model;

use Database\Factory\QueryBuilder;
use Error;

class Model
{
	protected string $table = '_';
	protected string $primary_key = '_';

	public function save(array|object $inputs)
	{
		if(empty($inputs)){
			throw new Error('Campos Vazios');
		}
		if(is_object($inputs)){
			$inputs = (array)$inputs;
		}
		// Update caso a chave primaria esteja no array
		if( (isset($inputs["$this->primary_key"]) && !empty($inputs["$this->primary_key"])) ){
			$primary_key_value = $inputs[$this->primary_key];
			unset($inputs[$this->primary_key]);

			if(empty($inputs)){
				throw new Error('Campos Vazios');
			}

			(new QueryBuilder($this->table))->update()->set($inputs)
			->safeWhere("$this->primary_key = ?",[$primary_key_value])
			->execute();
		}// INSERT
		else{
			(new QueryBuilder($this->table))
			->insert()
			->with($inputs)
			->save();
		}
	}

	public function remove(int|string $id)
	{
		(new QueryBuilder($this->table))
		->delete()
		->safeWhere("$this->primary_key = ?",[$id])
		->executeQuery();
	}

	public function find($id): object|null
	{
		$data = (new QueryBuilder($this->table))->select('*')->where("$this->primary_key = $id")->get();
		return (isset($data[0]) && is_object($data[0])) ? $data[0] : null;
	}

	public function getAll(string $where = '',array $values = []): array|null
	{
		$data = (new QueryBuilder($this->table))->select('*');
		if($where){
			if(!empty($values)){
				$data->safeWhere($where, $values);
			}else{
				$data->where($where);
			}
		}
		$data = $data->get();
		return (isset($data[0]) && !empty($data)) ? $data : null;
	} 

}
?> 