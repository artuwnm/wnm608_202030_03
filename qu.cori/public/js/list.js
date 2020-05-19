

// Promise ( aynschronous code )
const getData = (options) => {
	return fetch('../../data/api.php',{
		method:'POST',
		body:JSON.stringify(options),
		headers:{'Content-Type':'application/json'}
	}).then(r=>r.json());
}


// Currying
const templater = f => a =>
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');
// function getData($f) {
// 	return json_decode(file_get_contents($f));
// }
// 
const makeProductList = templater(o=>{
return `
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=${o.id}" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="/images/store/${o.thumbnail}" alt=""></div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;${o.price}</div>
				<div class="product-title">${o.title}</div>
			</figcaption>
		</figure>
	</a>
</div>
`;
})
const showResults = (d) => {
	$(".productlist").html(
		d.result.length == 0 ? "No Results" :
		makeProductList(d.result)
	);
}

getData({type:'product_all'}).then(showResults);


$(()=>{
	
	$("#product-search").on("submit",function(e){
		e.preventDefault();
		console.log("honk")
		getData({
			type:'product_search',
			search:$("#product-search>input").val()
		}).then(showResults);
	});


	$(".js-filter").on("click",function(e){
		getData(
		$(this).data("value")==""?{
			type:'product_all'
		}:{
			type:'product_filter',
			column:$(this).data("type"),
			value:$(this).data("value")
		}).then(showResults);
	})

	$(".js-sort").on("change",function(e){
		(
			this.value==1 ?
				getData({type:"product_sort",column:'date_create',dir:'DESC'}) :
			this.value==2 ?
				getData({type:"product_sort",column:'date_create',dir:'ASC'}) :
			this.value==3 ?
				getData({type:"product_sort",column:'price',dir:'DESC'}) :
			this.value==4 ?
				getData({type:"product_sort",column:'price',dir:'ASC'}) :
			getData({type:'product_all'})
		).then(showResults);
	})


});