
const showResults = (d) => {
	$(".productlist").html(
		d.result.length == 0 ? "No Results" :
		makeProductList(d.result)
	);
}


getData({
	type:'product_all'
}).then(showResults);

$(()=>{
	$("#product-search").on("submit", function(e){
		e.preventDefault();
		getData({
			type:'product_search',
			search:$("#product-search>input").val()
		}).then(showResults);
	});


	$(".js-filter").on("click", function(e){
		getData(
		$(this).data("value")==""?{
			type:'product_all'
		}:{
			type:'product_filter',
			column:$(this).data("type"),
			value:$(this).data("value")
		}).then(showResults);
	});

	$(".js-sort").on("change", function(e){
		(
			this.value==1 ?
				getData({type:"product_sort",column:'price',dir:'DESC'}) :
			this.value==2 ?
				getData({type:"product_sort",column:'price',dir:'ASC'}) :
			getData({type:'product_all'})
		).then(showResults);
	});
});