
const makeProductList = templater(o=>{
	return `
	<div class="container">
		<div class="col-4 col-s-4">
			<div class="product-description">
				<a href="product_item.php?id=${o.id}">
					<img src="img/little.jpg">
					<div>
						<h2>${o.title}</h2>
						<p>&dollar;${o.price}</p>
					</div>
				</a>
			</div>
		</div>
	</div>	
	`;
})