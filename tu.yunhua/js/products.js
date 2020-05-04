

$(()=>{
	$(".product-thumbs img").on("mouseenter",function(){
		$(".product-main img").attr("src",$(this).attr("src"))
	})
})