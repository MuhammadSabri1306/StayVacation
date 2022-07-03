<?php
/**
 * 
 */
class UserManager
{
	function __construct(){
		if(!isset($_SESSION['user'])){
			$_SESSION['user'] = array();

			$this->setId(null);
			$this->setEmail(null);
			$this->setName(null);
			$this->setLevel(USER_LEVEL_UNKNOWN);
		}
	}

	function get(){
		return (Object) array(
			'id' => $this->getId(),
			'email' => $this->getEmail(),
			'name' => $this->getName(),
			'level' => $this->getLevel()
		);
	}

	function setId($id){
		$_SESSION['user']['id'] = $id;
	}

	function getId(){
		return $_SESSION['user']['id'];
	}

	function setEmail($email){
		$_SESSION['user']['email'] = $email;
	}

	function getEmail(){
		return $_SESSION['user']['email'];
	}

	function setName($name){
		$_SESSION['user']['name'] = $name;
	}

	function getName(){
		return $_SESSION['user']['name'];
	}

	function setLevel($level){
		$_SESSION['user']['level'] = $level;
	}

	function getLevel(){
		return $_SESSION['user']['level'];
	}

	function hasLogin(){
		return $this->getLevel() != USER_LEVEL_UNKNOWN;
	}

	function clear(){
		$_SESSION['user'] = array();
		unset($_SESSION['user']);
		session_destroy();
	}
}
