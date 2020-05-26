
const makeProductList = templater(o=>{
return `
<div class="col-md-4 text-center animate-box">
	<div class="product">
	<a href="product_item.php?id=${o.id}" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="./images/store/${o.thumbnail}" alt=""></div>
			<figcaption class="product-description">
				<div class="desc">
					<h3><div class="product-name">${o.name}</div></h3>
				</div>		
				<span><div class="product-price">&dollar;${o.price}</div></span>
			</figcaption>
		</figure>
	</a>
	</div>
</div>
`;
})




