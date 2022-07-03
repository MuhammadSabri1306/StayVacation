<?php
/**
 * 
 */
class Reservation extends Controller
{
	function index(){
		$view = new View('reservation');
		$view->show();
	}

	function checkout(){
		$view = new View('checkout');
		$view->show();
	}

	function save(){
		$handler = new FormHandler('saveOrders', 'POST');
		$handler->params = ['name', 'email', 'telp', 'products'];

		if($handler->run()){
			
			?><script type="text/javascript">
				sessionStorage.removeItem("StayVacationCheckoutSession");
				document.location.href = "<?=BASEDOMAIN?>/reservation";
			</script><?php

		}else{
			$this->kick();
		}
	}
}
