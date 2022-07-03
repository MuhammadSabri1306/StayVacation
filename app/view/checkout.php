<?php

$theme = $this->getTheme('DefaultTheme');
$theme->title = 'StayVacation - Checkout';
$theme->header(function(){

?><script src="<?=DEFAULT_VIEW_VENDOR_URL?>/vue/unpkg-vue3.prod.js"></script><?php

});

?><main class="bg-light min-h-screen">
	<nav class="navbar pt-12">
		<div class="container lg:px-12 flex items-center justify-between">
			<a href="<?=BASEDOMAIN?>/reservation" class="p-3 primary-link inline-flex items-center"><i class="fas fa-long-arrow-alt-left text-base mr-2"></i>Pesanan</a>
		</div>
	</nav>
	<div class="pt-24 container grid-16 grid-cols-1 mb-8">
		<h2 class="text-5xl font-black leading-tight">Checkout</h2>
	</div>
	<article id="app" class="pb-40 container grid-16 grid-cols-[1.5fr,1fr]">
		<section>
			<h6 class="text-lg font-black leading-tight mb-4 ml-8">Pesanan anda</h6>
			<div v-if="loaded" class="ml-8 grid">
				<table class="table-custom table-auto">
					<tr>
						<th>No.</th><th>Nama</th><th>Kategori</th><th>Jumlah</th><th>Harga</th>
					</tr>
					<tr v-for="(item, index) in products">
						<td>{{ index + 1 }}</td>
						<td>{{ item.title }}</td>
						<td>{{ item.category }}</td>
						<td>{{ item.count }}</td>
						<td>Rp. {{ item.price.toLocaleString("id-ID") }}</td>
					</tr>
					<tr>
						<th colspan="4">Total</th>
						<th>Rp. {{ total.toLocaleString("id-ID") }}</th>
					</tr>
				</table>
			</div>
			<p v-else class="text-5xl text-center text-dark/50">
				<i class="fas fa-circle-notch fa-spin"></i>
			</p>
			<div class="mt-8 flex justify-end">
				<button type="button" @click="reset" class="btn-hero border-gray-500 bg-gray-500 hover:bg-gray-400 focus:bg-gray-400 text-white transition-color transition-200" data-redirectto="<?=BASEDOMAIN?>/reservation">Batalkan</button>
			</div>
		</section>
		<form method="post" action="<?=BASEDOMAIN?>/reservation/save">
			<h6 class="text-lg font-black leading-tight mb-4">Data pribadi anda</h6>
			<input type="text" class="form-input mb-4" name="name" placeholder="Nama anda" aria-label="Nama" required>
			<input type="email" class="form-input mb-4" name="email" placeholder="Email anda" aria-label="Email" required>
			<input type="telp" class="form-input mb-4" name="telp" placeholder="No. telepon anda" aria-label="Telephone Number">
			<input type="hidden" name="products" :value="productsJSON">
			<div class="grid">
				<button type="submit" class="btn-hero bg-dark hover:bg-sky-700 focus:bg-sky-700 hover:border-sky-700 focus:border-sky-700 text-white transition-color transition-200" :disabled="!submitValidation">Proses Pesanan</button>
			</div>
		</form>
	</article>
</main><?php

$theme->footer(function(){

	?><script src="<?=DEFAULT_VIEW_ASSETS_URL?>/js/checkout.min.js"></script><?php

});
