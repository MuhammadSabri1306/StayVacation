<?php
/**
 * 
 */
class DefaultTheme extends Theme
{
	public $btnContact = null;
	public $nav = null;

	function header($embedded = null){
		include $this->getComponentPath('header');
	}

	function footer($embedded = null){
		include $this->getComponentPath('footer');
	}

	private function buildNav(){
		if(is_null($this->btnContact) || is_null($this->nav)){
			return null;
		}

		include $this->getComponentPath('navigation');
	}
}
