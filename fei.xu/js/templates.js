

const makeProductList = templater(o=>{
return `
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=${o.id}" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="../fei.xu/finalphp/img/store/${o.thumbnail}" alt=""></div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;${o.price}</div>
				<div class="product-name">${o.name}</div>
			</figcaption>
		</figure>
	</a>
</div>
`;
})