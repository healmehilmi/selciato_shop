<?php require_once __DIR__ . '/../Partials/Header.php'; ?>
    
                    <div class="card-body">
                        <h5 class="card-title ">Login</h5>
                        <form class="form-signin" method="post">
                        <div class="login_image">
                            <img src="Assets/fotos/profilefoto.png" alt="">
                         </div>
                            <div class="form-label-group">
                                <input type="text" id="email" class="form-control" name="email" placeholder="Email address" required autofocus>
                                <label for="email">Email address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <input type="hidden" name="_referer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>">

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                        </form>
                    </div>
          
<?php require_once __DIR__ . '/../Partials/Footer.php'; ?>



