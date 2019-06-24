<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="product col-3">
            <div class="image">
                        <img src="<?php echo $product->images[0]; ?>">
					</div>
                <a href="products/show/<?php echo $product->id; ?>">
                    <?php echo $product->name; ?>
                </a>
                <div style="font-size:12px" class="description">
                    <?php echo $product->description; ?>
                </div>
                <div style="font-size:12px" class="price">
                    $<?php echo $product->price; ?>
                </div>
                <a class="a-sel" href="products/show/<?php echo $product->id; ?>"><img class="price_tag" src="Assets/fotos/price-tag.png" alt="Add To Chard"><p>Product description</p>  </a>

                
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>