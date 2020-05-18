
const makeProductList = templater(o=>{
	return `


<div class="col-xs-6 col-md-4">
<a href="Product_item.php?id=${o.id}" class="dispaly-block">
	
	<figure class="product-figure soft">
			<div class="product-image"><img src="img/${o.thumbnail}" alt="">

			</div>
			<figcaption class="product-description">
				<div class="product-name">${o.name}</div>
                <div class="product-price">&dollar;${o.price}</div>
			</figcaption>
		</figure>
	</a>
</div>

`;
})