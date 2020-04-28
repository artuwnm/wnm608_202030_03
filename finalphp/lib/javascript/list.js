

getData({
	type:'product_from_id',
	id:'price'
}).then(d=>{
	$(".productlist").html(`<div>${d.result[0].price}</div>`)
})