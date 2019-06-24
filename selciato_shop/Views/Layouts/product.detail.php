<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
    <div class="container-d">

        
        <div class="product-d-foto">
            <div class="image">
                 <?php foreach ($product->images as $image): ?>
                     <img src="<?php echo $image; ?>" alt="<?php echo $product->name; ?>" width="300px">
                 <?php endforeach; ?>
            </div>
        </div>
        <div class="row-p">
        
        <h1><?php echo $product->name; ?></h1>
        
        

        <div class="description">
            <?php echo $product->description; ?>
        </div>

        <div class="price">
            <?php  echo sprintf('%.2f ,-', $product->price); ?>
        </div>

        <?php if ($product->stock <= 0): ?>
            <div class="out-of-stock">
                Dieses Produkt ist derzeit nicht lieferbar
            </div>
        <?php endif; ?>

  
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
        <a class="a-del" href="<?php echo $base; ?>cart/add/<?php echo $product->id; ?>" class="btn btn-primary"><p>Add To Cart</p> </a>

        <?php else: ?>
        <a class="a-del" href="<?php echo $base; ?>login" ><p>login for Add To Cart</p> </a>
        <?php endif; ?>




        
    </div>
    </div>


   
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>