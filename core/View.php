<?php
/**
 * 
 */
class View
{
	private $path;
	private $model;

	function __construct($path, $model = null){
		$path = "/app/view/$path.php";
		file_exists(BASEPATH . $path) or exit("Error to get View's file on path: ". BASEDOMAIN . '/' . $path);

		$this->path = BASEPATH . $path;
		$this->model = $model;
	}

	function show(){
		$data = null;

		if(!is_null($this->model)){
			$data = $this->model->getData();
		}

		if(!is_null($data) && !empty($data)){
			extract($data);
		}

		unset($data);
		include $this->path;
	}

	private function getTheme($theme){
		require BASEPATH . '/theme/index.php';
		return Theme::load($theme);
	}
}
