<?php
/**
 * 
 */
class FormHandler
{
	private $path;
	private $method = '';
	private $db = null;
	public $params = [];

	function __construct($path, $method){
		$path = "/app/formHandler/$path.php";
		file_exists(BASEPATH . $path) or exit("Error to get Form Handler's file on path: ". BASEDOMAIN . '/' . $path);

		$this->path = BASEPATH . $path;
		$this->method = $method;
	}

	private function validate(){
		switch($this->method) {
			case 'POST': $methodParams = $_POST; break;
			case 'GET': $methodParams = $_GET; break;
			default: $methodParams = null; break;
		}

		if(!is_null($methodParams)){
			foreach($this->params as $key){
				if(!in_array($key, array_keys($methodParams))){
					return false;
				}
			}
		}

		return true;
	}

	private function getParamsValue(){
		$params = [];
		
		if($this->method == 'POST'){
			foreach($this->params as $key){
				$params[$key] = strip_tags(trim($_POST[$key]));
			}
		}elseif($this->method == 'GET'){
			foreach($this->params as $key){
				$params[$key] = $_GET[$key];
			}
		}else{
			return [];
		}

		return $params;
	}

	function run(){
		if(!$this->validate()){
			return false;
		}

		$paramsValue = $this->getParamsValue();
		if(count($paramsValue) > 0){
			extract($paramsValue);
		}

		require $this->path;
		if(!isset($success)){
			return false;
		}
		
		return $success;
	}

	private function db(){
		if(is_null($this->db)){
			require_once BASEPATH . '/lib/Database.php';
			$this->db = new Database();
		}

		return $this->db;
	}
}
