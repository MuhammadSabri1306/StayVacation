<?php

$theme = $this->getTheme('DefaultTheme');
$theme->title = 'StayVacation - Tentang Kami';
$theme->header();

?><main class="bg-section2 min-h-screen">
	<nav class="navbar pt-12">
		<div class="container lg:px-12">
			<a href="<?=BASEDOMAIN?>" class="p-3 primary-link inline-flex items-center"><i class="fas fa-long-arrow-alt-left text-base mr-2"></i>Kembali</a>
		</div>
	</nav>
	<div class="pt-24 pb-40 container grid-16 grid-cols-1">
		<div class="text-black md:w-5/6 lg:w-2/3">
			<h2 class="text-5xl font-black leading-tight mb-8">Tentang kami</h2>
			<p class="leading-normal text-lg"><span class="font-bold">StayVacation</span> adalah perusahaan layanan traveling. Kami menyediakan berbagai keperluan perjalanan seperti reservasi hotel dan pelayanan pemesanan tiket transportasi. Kami telah bekerja sama dengan beberapa penyedia hotel dan transportasi untuk memberi kamu kemudahan dalam mengakses layanan-layanan tadi hanya dalam satu website. Penting juga bagi kami untuk tahu tanggapanmu tentang kami, berikan feedback untuk kami <a href="<?=BASEDOMAIN?>/contact" class="primary-link leading-normal text-lg">disini</a>.</p>
		</div>
	</div>
</main><?php

$theme->footer();
