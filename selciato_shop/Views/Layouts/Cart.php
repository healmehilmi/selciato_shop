<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
    <div class="container">

        <h6>Shopping Basket</h6>

        <ul class="basket_elements" >
           <li class="produckt_block">
               <ul class="produckt_block_ul" >
                   <li>
                       <h4>Product</h4>
                   </li>
                   <li>
                   <?php foreach ($products as $product) : ?>
            <div style="    display: flex;
    align-items: flex-end;" class="product ">
            <img style="width:53px" src="<?php echo $product->images[0]; ?>"> <?php echo $_SESSION['cart'][$product->id]; ?>x <?php echo $product->name; ?> <a href="cart/remove/<?php echo $product->id; ?>">Remove from Cart</a>

            </div>

        <?php endforeach; ?>
                   </li>
                </ul>
            </li>
            <li class="price_block">
               <ul class="price_block_ul" >
                   <li>
                       <h4>Price</h4>
                   </li>
                   <li>
                   <?php foreach ($products as $product) : ?>
            <div style=" display: flex; position: relative; height: 44px; align-items: center;" class="product">
            <?php echo $product->price; ?> 
            </div>
        <?php endforeach; ?>
                   </li>
                </ul>
            </li>
            <li class="Quantity_block">
               <ul class="Quantity_block_ul" >
                   <li>
                       <h4>Quantity</h4>
                   </li>
                   <li>
                   <?php foreach ($products as $product) : ?>
            <div style=" display: flex; position: relative; height: 44px; align-items: center;" class="product">
            <?php echo $_SESSION['cart'][$product->id]; ?>
            </div>
        <?php endforeach; ?>
                   </li>
                </ul>
            </li>
            <li class="Total_block">
               <ul class="Total_block_ul" >
                   <li>
                       <h4>Total</h4>
                   </li>
                   <li>
                   <?php foreach ($products as $product) : ?>
            <div style=" display: flex; position: relative; height: 44px; align-items: center;" class="product">
            <?php echo $_SESSION['cart'][$product->id] * $product->price; ?>
            </div>
        <?php endforeach; ?>
                   </li>
                </ul>
            </li>
           
           
        
        </ul>
        <hr style="background: #cc8023; border: none; color: #333; height: 1px; width: 90%;">

      

        <div class="total-price">
            Gesamtpreis: <?php echo sprintf('%.2f ,-', $total); ?>
        </div>


          <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true): ?>
            <a href="<?php echo $base; ?>checkout/address" class="a-del">Buy!</a>
        <?php else: ?>
            <a href="login" class="a-del">login for Buy</a>
        <?php endif; ?>

    </div>
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>