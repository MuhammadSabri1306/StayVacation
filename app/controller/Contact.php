<?php
/**
 * 
 */
class Contact extends Controller
{
	function index(){
		$view = new View('contact');
		$view->show();
	}

	function send(){
		$handler = new FormHandler('sendFeedback', 'POST');
		$handler->params = ['name', 'email', 'telp', 'message'];

		if($handler->run()){
			
			?><script type="text/javascript">
				alert('Terima kasih atas masukan anda.');
				document.location.href = "<?=BASEDOMAIN?>/contact";
			</script><?php

		}else{

			?><script type="text/javascript">
				alert('Masukan anda tidak terkirim. Mohon ulangi kembali.');
				window.history.back();
			</script><?php

		}
	}
}
