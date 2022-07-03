const { createApp } = Vue;
createApp({
	data(){
		return {
			loaded: false,
			products: [],
			total: 0
		};
	},
	computed: {
		productsJSON(){
			return JSON.stringify(this.products);
		},
		submitValidation(){
			return this.products.length > 0 && this.loaded;
		}
	},
	created(){
		const products = this.session();
		products && this.setupData(products);
	},
	methods: {
		session(val = null){
			if(val === null)
				return JSON.parse(sessionStorage.getItem("StayVacationCheckoutSession"));
			sessionStorage.setItem("StayVacationCheckoutSession", JSON.stringify(val));
		},
		setupData(products){
			this.products = products
				.filter(item => item.reserved)
				.map(item => {
					let { id, title, category, count, price } = item;
					price *= count;
					return { id, title, category, count, price };
				});
			this.total = this.products.map(item => item.price).reduce((partialSum, a) => partialSum + a, 0);
			this.loaded = true;
		},
		reset(event){
			sessionStorage.removeItem("StayVacationCheckoutSession");
			const redirectTo = event.target.getAttribute("data-redirectto");
			if(redirectTo) window.location.href = redirectTo;
		}
	}
}).mount("#app");
