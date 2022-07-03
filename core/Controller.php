<?php
/**
 * 
 */
class Controller
{
	protected function setVisibility(...$visibility){
		$appUser = new UserManager();
		if(!in_array($appUser->getLevel(), $visibility)){
			$this->kick();
		}
	}

	protected function kick(){
		header('location:' . DEFAULT_KICK_PAGE);
		exit('You dont have access to this page');
	}

	protected function getComponent($component){
		$file = "/core/view/component/$component.php";
		file_exists(BASEPATH . $file) or exit("Error to get Template's file on path: $file");

		include BASEPATH . $file;
		return new $component;
	}

	protected function use($library){
		$library = "/lib/$library.php";
		file_exists(BASEPATH . $library) or exit("Error to get Library's file on path: $library");

		require_once BASEPATH . $library;
	}
}
