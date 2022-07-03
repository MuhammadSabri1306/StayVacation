<?php

$theme = $this->getTheme('DefaultTheme');
$theme->title = 'StayVacation';

$theme->btnContact = array(
	'url' => BASEDOMAIN . '/contact',
	'title' => 'Hubungi Kami'
);

$theme->nav = array(
	array('url' => '#home', 'title' => 'Beranda', 'active' => true),
	array('url' => BASEDOMAIN . '/guide', 'title' => 'Panduan', 'active' => false),
	array('url' => BASEDOMAIN . '/reservation', 'title' => 'Pemesanan', 'active' => false),
	array('url' => BASEDOMAIN . '/about', 'title' => 'Tentang Kami', 'active' => false)
);

$theme->header();

?><main>
	<section id="home" class="bg-img-full">
		<div class="pt-24 pb-40 container grid-16 grid-cols-[1fr_1.6fr]">
			<div class="text-dark">
				<h2 class="text-5xl font-black leading-tight mb-6">Traveling<br>ke destinasi<br>pilihanmu</h2>
				<p class="text-sm mb-6">Penuhi kebutuhan jalan-jalanmu dengan beragam pilihan paket wisata. Pemesanan tiket pesawat dan reservasi hotel secara cepat dengan harga sesuai dompetmu.</p>
				<a href="<?=BASEDOMAIN?>/reservation" class="btn-hero bg-dark text-white transition-color transition-200 hover:bg-transparent hover:text-dark">Pesan Sekarang</a>
			</div>
			<div class="flex">
				<div class="bg-hero"></div>
			</div>
		</div>
	</section>
	<section class="bg-section1 bg-img-full">
		<div class="w-1/3 mx-auto py-16 text-white opacity-90">
			<h2 class="text-5xl font-black leading-tight text-center mb-6">Ciptakan kenanganmu</h2>
			<p class="text-center text-sm font-semibold">Buat pengalaman yang mengesankan bersama kami. Dengan segala kemudahan yang kamu dapatkan, kamu bisa fokus pada perjalanan bersama orang-orang terdekatmu.</p>
		</div>
	</section>
	<section class="pt-80 pb-56 bg-section2 bg-img-full">
		<div class="flex mb-16">
			<img src="<?=DEFAULT_VIEW_ASSETS_URL?>/img/airplace-icon.jpg" alt="airplane icon" class="w-16 mx-auto">
		</div>
		<h2 class="text-5xl font-black text-dark leading-tight text-center">Eksplor tempat yang<br><span class="underline underline-offset-4 italic">belum</span> kamu kunjungi</h2>
	</section>
</main><?php

$theme->footer();
