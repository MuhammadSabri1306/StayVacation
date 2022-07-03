const products = [
	{
		id: "0",
		title: "Lion Air",
		category: "Tiket Pesawat",
		img: "upload/lion-air-2.jpg",
		price: 500000,
		desc: "Penerbangan pukul 16:30 - 18:00"
	},
	{
		id: "1",
		title: "Hotel Grand Rofina",
		category: "Hotel",
		img: "upload/hotels.jpg",
		price: 346750,
		desc: "Alamat Jl. Ahmad Yani No.10, Makassar, Sulawesi Selatan"
	},
	{
		id: "2",
		title: "Hotel CLARO",
		category: "Hotel",
		img: "upload/claro.jpg",
		price: 346750,
		desc: "Alamat Jl. AP. Pettarani No.12, Makassar, Sulawesi Selatan"
	}
];

const { createApp } = Vue;
createApp({
	data(){
		return {
			loaded: false,
			products: []
		};
	},
	created(){
		this.setupData(products);
		this.session(this.products);
		this.loaded = true;
	},
	methods: {
		session(val = null){
			if(val === null)
				return JSON.parse(sessionStorage.getItem("StayVacationCheckoutSession"));
			sessionStorage.setItem("StayVacationCheckoutSession", JSON.stringify(val));
		},
		setupData(products){
			const dataSession = this.session();
			if(dataSession){
				dataSession.forEach(item => {
					const sameIdIndex = products.findIndex(pItem => item.id == pItem.id);
					if(sameIdIndex < 0) products.push(item)
					else products[sameIdIndex] = item;
				});
			}
			
			this.products = products.map(item => {
				item.count = item.count || 1;
				item.reserved = Boolean(item.reserved);
				item.img = `url('${ item.img }')`;
				return item;
			});
		},
		updateProducts(){
			this.session(this.products);
		},
		setCount(event){
			const id = event.target.getAttribute("data-id");
			const i = this.products.findIndex(item => item.id == id);
			if(i < 0) return;
			this.products[i].count = Number(event.target.value);
			this.updateProducts();
		},
		changeReserved(event){
			const id = event.target.getAttribute("data-id");
			const i = this.products.findIndex(item => item.id == id);
			if(i < 0) return;

			if(this.products[i].reserved){
				this.products[i].reserved = false;
				this.products[i].count = 1;
			}else this.products[i].reserved = true;
			this.updateProducts();
		}
	}
}).mount("#app");
