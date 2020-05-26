
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


});