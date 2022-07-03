<?php

$theme = $this->getTheme('DefaultTheme');
$theme->title = 'StayVacation - Hubungi Kami';
$theme->header();

?><nav class="navbar pt-12">
	<div class="container lg:px-12">
		<a href="<?=BASEDOMAIN?>" class="p-3 primary-link inline-flex items-center"><i class="fas fa-long-arrow-alt-left text-base mr-2"></i>Kembali</a>
	</div>
</nav>
<main class="bg-light">
	<div class="pt-24 pb-40 container grid-16 grid-cols-[1fr_1.6fr]">
		<form method="post" action="<?=BASEDOMAIN?>/contact/send">
			<h2 class="text-5xl font-black leading-tight mb-6">Hubungi kami</h2>
			<input type="text" class="form-input mb-4" name="name" placeholder="Nama anda" aria-label="Nama" required>
			<input type="email" class="form-input mb-4" name="email" placeholder="Email anda" aria-label="Email" required>
			<input type="telp" class="form-input mb-4" name="telp" placeholder="No. telepon anda" aria-label="Telephone Number">
			<textarea class="form-input mb-8" name="message" placeholder="Ketik pesan anda disini.." rows="5" aria-label="Message" required></textarea>
			<div class="grid">
				<button type="submit" class="btn-hero bg-dark hover:bg-sky-700 focus:bg-sky-700 hover:border-sky-700 focus:border-sky-700 text-white transition-color transition-200">Kirim Pesan</button>
			</div>
		</form>
		<div class="flex pl-16">
			<div class="bg-hero"></div>
		</div>
	</div>
</main><?php

$theme->footer();
