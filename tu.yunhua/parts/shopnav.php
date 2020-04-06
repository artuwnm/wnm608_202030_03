<section class="container">
<!-- 
	<script>
	const makeNav = (classes='') => {
		const links = ['home','Shop','contact','search','login','cart'];
		let ran = Math.floor(Math.random()*links.length);
		return `
		<div>
			<nav class="${classes}">
				<ul>
				${links.reduce((r,o,i)=>{
				return r+`<li class="${ran==i?'active':''}">
				<a href="#">${o}</a>
				</li>`;
				},'')}
				</ul>
			</nav>
		</div>
		`;
	}
	</script> -->


			<h3 id="flexnav"></h3>
			<script>document.write(makeNav("nav-flex"))</script>
		<div>
			<nav class="nav-flex">
				<ul>
				<li class="">
				<a href="#">home</a>
				</li><li class="active">
				<a href="#">Shop</a>
				</li><li class="">
				<a href="#">contact</a>
				</li><li class="">
				<a href="#">search</a>
				</li><li class="">
				<a href="#">login</a>
				</li><li class="">
				<a href="#">cart</a>
				</li>
				</ul>
			</nav>
		</div>



	
</section>