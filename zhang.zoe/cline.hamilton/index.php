<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Page</title>
	
	<?php include "parts/meta.php" ?>

</head>
<body>
	
	<?php include "parts/navbar.php" ?>
	

	<!-- .container>p*2>lorem30 -->
	<div class="container">
		<div class="card soft">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum magni dolor aspernatur vero repudiandae porro ab accusamus nostrum, quibusdam, possimus vel dolorem nemo eos exercitationem. Impedit laboriosam commodi, at.</p>
			<p>Sed atque, molestiae aperiam voluptatum deleniti quis amet mollitia! Aliquam amet eius molestias dignissimos nesciunt tempore voluptate sunt voluptatibus praesentium, aut deleniti animi officiis ipsa quam unde, similique quasi adipisci.</p>
		</div>
		<div class="card soft dark">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, illum magni dolor aspernatur vero repudiandae porro ab accusamus nostrum, quibusdam, possimus vel dolorem nemo eos exercitationem. Impedit laboriosam commodi, at.</p>
			<p>Sed atque, molestiae aperiam voluptatum deleniti quis amet mollitia! Aliquam amet eius molestias dignissimos nesciunt tempore voluptate sunt voluptatibus praesentium, aut deleniti animi officiis ipsa quam unde, similique quasi adipisci.</p>
		</div>
	</div>



	<div class="view-window display-flex flex-align-center flex-justify-center" style="background-image:url('img/mountains_01.jpg')">
		<div class="card soft">
			<h2>COOL CONTENT</h2>
		</div>
	</div>



	<div class="container">
		<h2>Grid</h2>
		<div class="grid gap">
			<div class="col-4">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis, ipsa! Dicta dolor blanditiis, velit iure, distinctio perferendis nisi impedit.</p>
					<p>Unde, iste neque laborum, aperiam quod dignissimos voluptatum facere! Voluptatibus, distinctio, in. Vitae qui, reprehenderit facere rerum ad dolorem doloremque!</p>
				</div>
			</div>
			<div class="col-4">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veritatis sequi fugit eum iste cumque molestias eveniet at quasi alias!</p>
					<p>Id voluptatibus, ipsa debitis sint, vel nulla dignissimos quis cupiditate tempora similique accusamus facilis facere inventore laborum porro quo sapiente?</p>
				</div>
			</div>
			<div class="col-4">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veritatis sequi fugit eum iste cumque molestias eveniet at quasi alias!</p>
					<p>Id voluptatibus, ipsa debitis sint, vel nulla dignissimos quis cupiditate tempora similique accusamus facilis facere inventore laborum porro quo sapiente?</p>
				</div>
			</div>



			<div class="col-3">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis, ipsa! Dicta dolor blanditiis, velit iure, distinctio perferendis nisi impedit.</p>
					<p>Unde, iste neque laborum, aperiam quod dignissimos voluptatum facere! Voluptatibus, distinctio, in. Vitae qui, reprehenderit facere rerum ad dolorem doloremque!</p>
				</div>
			</div>
			<div class="col-6">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veritatis sequi fugit eum iste cumque molestias eveniet at quasi alias!</p>
					<p>Id voluptatibus, ipsa debitis sint, vel nulla dignissimos quis cupiditate tempora similique accusamus facilis facere inventore laborum porro quo sapiente?</p>
				</div>
			</div>
			<div class="col-3">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veritatis sequi fugit eum iste cumque molestias eveniet at quasi alias!</p>
					<p>Id voluptatibus, ipsa debitis sint, vel nulla dignissimos quis cupiditate tempora similique accusamus facilis facere inventore laborum porro quo sapiente?</p>
				</div>
			</div>


			<div class="col-3">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam perspiciatis, ipsa! Dicta dolor blanditiis, velit iure, distinctio perferendis nisi impedit.</p>
					<p>Unde, iste neque laborum, aperiam quod dignissimos voluptatum facere! Voluptatibus, distinctio, in. Vitae qui, reprehenderit facere rerum ad dolorem doloremque!</p>
				</div>
			</div>
			<div class="col-6">
			</div>
			<div class="col-3">
				<div class="card soft">
					<!-- p*2>lorem20 -->
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veritatis sequi fugit eum iste cumque molestias eveniet at quasi alias!</p>
					<p>Id voluptatibus, ipsa debitis sint, vel nulla dignissimos quis cupiditate tempora similique accusamus facilis facere inventore laborum porro quo sapiente?</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<h2>Responsive Grid</h2>

		<div class="grid">
			<!-- .col-xs-6*2>.card.soft>lorem30 -->
			<div class="col-xs-12 col-xl-6">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem beatae quos impedit, natus nostrum odio voluptas a ullam voluptatem nam amet, rem facere accusantium fuga facilis laboriosam nihil soluta placeat.</div>
			</div>
			<div class="col-xs-12 col-xl-6">
				<div class="card soft">Enim ipsa, quas itaque. Quaerat eos cum repellendus atque nemo. Eius error libero, tenetur asperiores fuga quam, adipisci dignissimos quos, suscipit placeat id itaque. Vero hic error labore sequi recusandae?</div>
			</div>
		</div>

		<div class="grid">
			<!-- .col-xs-6*12>.card.soft>lorem30 -->
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae praesentium earum molestiae similique non consequatur ipsum, libero odit beatae reprehenderit totam eveniet, aspernatur dolor nihil magni numquam ratione cumque eum.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Qui voluptates molestiae expedita, eius quisquam. Enim veniam recusandae assumenda ab sit, veritatis voluptas, deleniti animi, unde illum sequi eius ducimus pariatur optio. Sed iure assumenda adipisci esse totam, quidem.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Repellendus recusandae sit enim, porro illo deleniti quis, dolorem adipisci assumenda incidunt, ex nesciunt quo ullam, amet officiis exercitationem. Cumque libero perferendis, at odit saepe nostrum dolorem. Veniam, enim, odio!</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Earum dolor quidem voluptate numquam, aspernatur hic expedita dolorem non! Quos ad quibusdam, minima, ab nobis culpa quis esse magni, quas vel omnis iste dicta tenetur reprehenderit enim. Dolores, eum.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Tempora natus dolore aspernatur blanditiis suscipit, esse maxime hic dolorem quo deleniti aut, qui tempore, deserunt. Aut, cupiditate alias nemo qui eos. Praesentium quam, aliquid ipsam suscipit porro illum quod!</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Totam dolore et nam quidem quis qui atque culpa nostrum? Aperiam dolorem quas eligendi possimus optio dolores, earum dicta ut ea animi quam culpa, ullam corrupti quae excepturi. Aut, eum.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Provident dolores vel quasi, esse corporis nulla doloremque molestias officia, iure et qui aut omnis nisi mollitia. Rem placeat eligendi beatae recusandae amet atque fuga nisi, totam voluptas, maxime hic!</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Doloribus ad debitis ducimus illum harum totam dolores reiciendis architecto, libero. Culpa beatae, cupiditate illo provident nihil. Expedita commodi atque, non sit odio veniam. Assumenda aspernatur nesciunt dicta laboriosam, temporibus.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Ipsam maxime alias dicta repellat ullam quae vero quos nobis, accusamus vitae, quidem, modi ex minus optio perspiciatis quod quasi incidunt consequuntur. Quas dignissimos error eveniet, consectetur eum modi aut.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Autem ullam repudiandae neque provident non atque ab reiciendis, fuga, doloremque eveniet impedit cupiditate suscipit, iste necessitatibus voluptates placeat doloribus voluptatibus! Eum molestiae labore et fugit quia esse voluptatum autem.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Molestiae consequatur, corrupti quas nesciunt quos rem perferendis dignissimos maxime aspernatur amet quo sit sint laboriosam eligendi aliquam incidunt, itaque sapiente. Nobis eaque numquam doloremque error explicabo natus, odio quo.</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-4 col-xl-3">
				<div class="card soft">Possimus a quas ab magnam fuga, voluptate corporis doloribus nesciunt. Necessitatibus eius deleniti, molestiae officia, sit consequatur eum? Corporis officia temporibus quis ad deserunt mollitia assumenda adipisci neque, velit maiores.</div>
			</div>
		</div>

		<div class="grid gap">
			<!-- .col-xs-12.col-md-4*3>.card.soft>lorem30 -->
			<div class="col-xs-12 col-md-4">
				<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, nisi, ipsa. Dignissimos nihil excepturi cum amet dicta exercitationem, tempore maxime aut repellendus nam officiis cumque vitae error magnam eius quod!</div>
			</div>
			<div class="col-xs-12 col-md-4">
				
				<div class="grid">
					<div class="col-xs-12 col-md-4">
						<div class="card soft">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident molestiae quia quaerat natus vero? Esse ipsam modi tempora ipsum, eum possimus quam dolor. Nisi maxime placeat ipsum, molestias. Numquam, repellat.</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="card soft">Unde necessitatibus quas quam omnis at iusto dolore, doloribus itaque, culpa fugit iste quasi id eos alias reiciendis saepe architecto perferendis aperiam a numquam earum quos dolor non possimus. Magnam!</div>
					</div>
					<div class="col-xs-12 col-md-4">
						<div class="card soft">Molestiae voluptatibus ipsum temporibus eveniet, rerum, corrupti quam quod quibusdam nihil eum odio officiis consectetur dicta voluptates eius optio, repellendus quia facilis saepe sapiente aliquam. Dicta architecto quis ut, hic.</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="card soft">Animi tempore ab asperiores iste natus illum quasi cum eius, non vel obcaecati voluptates quaerat in, ad. Possimus veniam libero esse tempora velit. Natus tenetur cumque, optio, dolorem impedit fugiat!</div>
			</div>
		</div>
	</div>
</body>
</html>