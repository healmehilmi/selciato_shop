<?php require_once __DIR__ . '/../Partials/Header.php'; ?>








<div class="secondwall">

	<div class="text_header_second">
		<h2>Sofas <span style="color:#cc8007;">&</span> Life</h2>
		<p class="text_header_info">We find the best independent designers and makers around the world to create your pieces.</p>
		<button class="produkt_button_first">Read More</button>

	</div>
	<img id="light" class="header_foto" src="Assets/fotos/bestsofa.png" alt="bestsofa">

</div>
</li>


</div>

<div class="favories">
	<h4>Our Favourites</h4>

	<ul class="Favorie_produkte">

		<?php foreach ($products as $product): ?>

		<?php if($product->favorites === true): ?>

		<li>
			<div class="produkt_1">

				<div class="imageBox_1">
					<div class="imageInn">
						<a href="products/show/<?php echo $product->id; ?>">
							<?php echo $product->name; ?>
						</a>
						<div class="image">
                        <img src="<?php echo $product->images[0]; ?>">
							
                            

						</div>
						<div class="description">
							<?php echo $product->description; ?>
						</div> 
						<div class="price">
							$<?php echo $product->price; ?>
						</div>
					</div>

				</div>
                <a class="a-sel" href="products/show/<?php echo $product->id; ?>"><img class="price_tag" src="Assets/fotos/price-tag.png" alt="Add To Chard"><p>Product description</p>  </a>



			</div>

			<?php endif; ?>


			<?php endforeach; ?>


	</ul>

</div>

<section>


	<div class="Hovered">

		<ul class="Hovers">
			<li>
				<a href="#">SHOP BY CATEGORY</a>
			</li>
			<li>
				<a href="#">SHOP BY ROOM</a>
			</li>
			<li>
				<a href="#">SHOP BY STYLE</a>
			</li>
		</ul>

		<div class="Content">
			<div class="Category">
				<ul>
					<li>
						<a href="#">SOFAS</a>
					</li>
					<li>
						<a href="#">TABLES</a>
					</li>
					<li>
						<a href="#">CHAIRS</a>
					</li>
					<li>
						<a href="#">LIGHTING</a>
					</li>
				</ul>
				<ul class="category_img">
					<li>
						<img src="fotos/.categoryfoto.jpg" alt="">
					</li>
				</ul>

			</div>
			<div class="Room">
				<ul>
					<li>
						<a href="#">LIVING ROOM</a>
					</li>
					<li>
						<a href="#">DINING ROOM</a>
					</li>
					<li>
						<a href="#">BED ROOM</a>
					</li>
				</ul>
				<ul class="room_img">
					<li>
						<img src="bilder/foto-kitchen.jpeg" alt="">
					</li>
				</ul>


			</div>
			<div class="Style">
				<ul>
					<li>
						<a href="#">SCANDINAVIAN</a>
					</li>
					<li>
						<a href="#">INDUSTRIAL</a>
					</li>
					<li>
						<a href="#">RETRO</a>
					</li>
					<li>
						<a href="#">MODERN</a>
					</li>

				</ul>
				<ul class="style_img">
					<li>
						<img src="bilder/foto-SCANDINAVIAN.jpg" alt="">
					</li>
				</ul>



			</div>


		</div>
	</div>










</section>




<?php require_once __DIR__ . '/../Partials/Footer.php'; 