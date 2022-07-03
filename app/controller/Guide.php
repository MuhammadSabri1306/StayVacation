<?php
/**
 * 
 */
class Guide extends Controller
{
	function index(){
		$view = new View('guide');
		$view->show();
	}
}
