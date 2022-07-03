<?php
/**
 * 
 */
class About extends Controller
{
	function index(){
		$view = new View('about');
		$view->show();
	}
}
