<?php
/**
 * 
 */
class Home extends Controller
{
	function index(){
		$view = new View('home');
		$view->show();
	}
}
