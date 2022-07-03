<?php
/**
 * 
 */
class Model
{
	private $path;
	private $params;
	private $db = null;

	function __construct($path, $params = []){
		$path = "/app/model/$path.php";
		file_exists(BASEPATH . $path) or exit("Error to get Model's file on path: ". BASEDOMAIN . '/' . $path);

		$this->path = BASEPATH . $path;
		$this->params = $params;
	}

	function getData(){
		include $this->path;

		if(!isset($data)){
			return null;
		}
		
		return $data;
	}

	private function db(){
		if(is_null($this->db)){
			require_once BASEPATH . '/lib/Database.php';
			$this->db = new Database();
		}

		return $this->db;
	}
}
