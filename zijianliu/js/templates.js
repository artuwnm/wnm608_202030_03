
const makeProductList = templater(o=>{
/*return `
<div class="col-xs-6 col-md-4">
	<a href="product_item.php?id=${o.id}" class="display-block">
		<figure class="product-figure soft">
			<div class="product-image"><img src="${o.images}" alt=""></div>
			<figcaption class="product-description">
				<div class="product-price">&dollar;${o.price}</div>
				<div class="product-title">${o.name}</div>
			</figcaption>
		</figure>
	</a>
</div>
`;*/
return `
<div class="col-xs-5 col-md-6">     
    <div class="card soft">
        <a href="product_item.php?id=${o.id}">
            <img src="${o.images}" alt="">
            <h4 class="product-name-small">${o.name}</h4>
            <h5 class="product-price-small">&dollar;${o.price}</h5>
        </a>
    </div> 
</div>
`;
})