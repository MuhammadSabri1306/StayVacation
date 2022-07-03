const fetchData = (url) => {

	return new Promise(function(resolve, reject){
		const xhttp = new XMLHttpRequest();

		xhttp.onload = function(){
			if(xhttp.status >= 200 && xhttp.status < 300)
				resolve(xhttp.responseText);
			else reject(xhttp.statusText);
		};

		xhttp.onerror = function(){
			reject(xhttp.statusText);
		};

		xhttp.open("GET", url);
		xhttp.send();
	});

};

const { createApp } = Vue;
createApp({
	data(){
		return {
			loaded: false,
			products: []
		};
	},
	created(){
		const url = "http://localhost/limus/api/products";
		fetchData(url).then(result => {
			result = JSON.parse(result);
			if(!result.status){
				console.error("Failed to load api from " + url);
				return;
			}

			this.setupData(result.data);
			this.session(this.products);
			this.loaded = true;
		}).catch(err => console.error(err));
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
				item.img = (item.img.search(/url\(/) < 0) ? `url('${ item.img }')` : item.img;
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
