
const makeProductList = templater(o=>{
	return `
		<div class="col-md-4 col-sm-12 col-xs-12">
			<div class="product-description">
				<a href="product_item.php?id=${o.id}">
					<img class="product-image" src="img/${o.images}">
					<div>
						<h2>${o.title}</h2>
						<p>&dollar;${o.price}</p>
					</div>
				</a>
			</div>
		</div>
	`;
})