<?php

$theme = $this->getTheme('DefaultTheme');
$theme->title = 'StayVacation - Pemesanan';
$theme->header(function(){

?><script src="<?=DEFAULT_VIEW_VENDOR_URL?>/vue/unpkg-vue3.js"></script><?php

})

?><main class="bg-light min-h-screen">
	<nav class="navbar pt-12">
		<div class="container lg:px-12 flex items-center justify-between">
			<a href="<?=BASEDOMAIN?>" class="p-3 primary-link inline-flex items-center"><i class="fas fa-long-arrow-alt-left text-base mr-2"></i>Kembali</a>
			<a href="<?=BASEDOMAIN?>/reservation/checkout" class="p-3 primary-link inline-flex items-center">Checkout<i class="fas fa-long-arrow-alt-right text-base ml-2"></i></a>
		</div>
	</nav>
	<article id="app" class="pt-24 pb-40">
		<div class="container grid-16 grid-cols-1">
			<h2 class="text-5xl font-black leading-tight mb-8">Pemesanan</h2>
		</div>
		<div v-if="loaded" class="container grid-16 grid-cols-3">
			<div v-for="item in products" class="product-card">
				<div class="product-img" :style="{ backgroundImage: item.img }"></div>
				<div class="product-separation"></div>
				<h6 class="product-title">{{ item.title }}</h6>
				<p class="product-category"><span class="font-semibold mr-2">Kategori</span>{{ item.category }}</p>
				<p class="product-price"><span class="font-semibold mr-2">Harga</span>Rp. {{ item.price.toLocaleString("id-ID") }}</p>
				<p class="product-desc">{{ item.desc }}</p>
				<div class="flex items-center mb-4">
					<label class="text-dark font-semibold mr-2">Jumlah</label>
					<input type="number" :value="item.count" @change="setCount" :data-id="item.id" class="product-count" aria-label="Jumlah">
				</div>
				<div class="grid">
					<button @click="changeReserved":data-id="item.id" type="button" class="btn-hero text-white transition-color transition-200" :class="{ 'bg-dark hover:bg-sky-700 border-dark hover:border-sky-700': !item.reserved, 'bg-sky-700 hover:bg-sky-800 border-sky-700': item.reserved }">{{ item.reserved ? 'Batalkan' : 'Pesan' }}</button>
				</div>
			</div>
		</div>
		<p v-else class="text-5xl text-center text-dark/50">
			<i class="fas fa-circle-notch fa-spin"></i>
		</p>
	</article>
</main><?php

$theme->footer(function(){

	?><script src="<?=DEFAULT_VIEW_ASSETS_URL?>/js/reservation.min.js"></script><?php

});
