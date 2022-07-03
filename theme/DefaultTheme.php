<?php
/**
 * 
 */
class DefaultTheme extends Theme
{
	function header($embedded = null){
		include $this->getComponentPath('header');
	}
	function footer($embedded = null){
		include $this->getComponentPath('footer');
	}
}
