
const makeProductList = templater(o=>{
return `
<div class="col-xs-12 col-md-4">
	<a href="product_item.php?id=${o.id}" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="images/store/${o.thumbnail}" alt=""></div>
			<figcaption class="product-description">
				<div class="product-title">${o.title}</div>
				<div class="product-description">${o.description}</div>
				<div class="product-price">&dollar;${o.price}</div>
				
			</figcaption>
		</figure>
	</a>
</div>
`;
})