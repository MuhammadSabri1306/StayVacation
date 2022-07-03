<?php
/**
 * 
 */
abstract class Theme
{
	public $title = '';

	abstract function header($embedded = null);
	abstract function footer($embedded = null);

	protected function getComponentPath($component){
		$componentDir = lcfirst(get_class($this));
		$path = "/theme/$componentDir/$component.php";
		
		file_exists(BASEPATH . $path) or exit("Error to get Theme's component on path: $path");
		return BASEPATH . $path;
	}

	protected function useSlot($embedded){
		if(is_null($embedded)){
			return null;
		}

		$className = get_class($this);
		is_callable($embedded) or exit($className . '->slot(): The parameter ($embedded) must a function.');
		$embedded();
	}

	static function load($theme){
		$path = "/theme/$theme.php";
		file_exists(BASEPATH . $path) or exit("Error to get Theme's file on path: $path");

		include BASEPATH . $path;
		return new $theme;
	}
}
