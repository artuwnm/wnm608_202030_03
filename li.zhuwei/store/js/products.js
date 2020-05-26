
// //Promise ( ayshronous code)
// const getData =(options =>{
// 	return fetch('data/api.php',){
// 		method:'POST',
// 		body:JSON.stringify(options),
// 		headers:{'Contenet-type':'application/json'}
// 	}).then(r+>r.json());	
// }

// //Currying 
// const templater =f =>a =>


$(()=>{
	$(".product-thumbs img").on("mouseenter",function(){
		$(".product-main img").attr("src",$(this).attr("src"))
	})
})