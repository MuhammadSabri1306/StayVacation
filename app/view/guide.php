<?php

$theme = $this->getTheme('DefaultTheme');
$theme->title = 'StayVacation - Panduan';
$theme->header();

?><main class="bg-section2 min-h-screen">
	<nav class="navbar pt-12">
		<div class="container lg:px-12">
			<a href="<?=BASEDOMAIN?>" class="p-3 primary-link inline-flex items-center"><i class="fas fa-long-arrow-alt-left text-base mr-2"></i>Kembali</a>
		</div>
	</nav>
	<div class="pt-24 pb-40 container grid-16 grid-cols-1">
		<div class="text-black md:w-5/6 lg:w-2/3">
			<h2 class="text-5xl font-black leading-tight mb-8">Panduan</h2>
			<ol class="leading-normal text-lg list-decimal">
				<li class="mb-3">Pilih menu <strong>Pemesanan</strong> atau klik <a href="<?=BASEDOMAIN?>/reservation" class="primary-link leading-normal text-lg">disini</a>.</li>
				<li class="mb-3">Selanjutnya kamu tinggal pilih berbagai layanan yang kamu butuhkan, sesukamu.</li>
				<li class="mb-3">Klik <strong>Checkout</strong> untuk mulai memproses pesananmu.</li>
				<li class="mb-3">Pastikan daftar pesananmu sudah benar. Isi nama dan alamat emailmu, lalu klik <strong>Proses Pesanan</strong>.</li>
				<li class="mb-3">Cek email kamu, kami akan mengirimkan kode pesanan dan instruksi pembayaran yang metode pembayarannya bisa kamu pilih.</li>
			</ol>
		</div>
	</div>
</main><?php

$theme->footer();
