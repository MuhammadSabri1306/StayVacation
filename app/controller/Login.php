<?php
/**
 * 
 */
class Login extends Controller
{
	function index(){
		$view = new View('login');
		$view->show();
	}
}
