

getData({
	type:'all'
}).then(d=>{
	$(".productlist").html(makeProductList(d.result))
})