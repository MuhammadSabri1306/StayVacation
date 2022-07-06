<?php

$theme = $this->getTheme('DefaultTheme');
$theme->title = 'StayVacation - Login';
$theme->header(function(){

	?><style type="text/css">body{min-height:100vh;display:flex;flex-direction:column;align-items:stretch;}</style><?php

});

?><main class="bg-light grow flex justify-center items-center">
	<form method="post" class="p-6 w-80">
		<div class="grid grid-cols-1">
			<label for="username" class="text-dark font-semibold mb-2">Username</label>
			<input type="text" name="username" class="form-input mb-4">
		</div>
		<div class="grid grid-cols-1">
			<label for="password" class="text-dark font-semibold mb-2">Password</label>
			<input type="password" name="password" class="form-input mb-4">
		</div>
		<div class="grid grid-cols-1 mt-8">
			<button type="submit" class="btn-hero bg-dark hover:bg-dark/90 focus:bg-dark/80 text-white border border-dark transition-colors transition-200">Login</button>
		</div>
		<div class="mt-4">
			<a href="<?=BASEDOMAIN?>" class="p-3 primary-link inline-flex items-center"><i class="fas fa-long-arrow-alt-left text-base mr-2"></i>Beranda</a>
		</div>
	</form>
</main><?php

$theme->footer();
