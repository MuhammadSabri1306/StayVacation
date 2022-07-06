<?php
/**
 * 
 */
class Admin extends Controller
{
	function index(){
		header('location:' . BASEDOMAIN . '/login');
	}
}
