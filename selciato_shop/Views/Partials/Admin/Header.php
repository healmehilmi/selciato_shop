<?php require_once __DIR__ . '/../../Partials/Admin/Header.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Selciato</title>

	<link rel="stylesheet" type="text/css" href="<?php echo $base; ?>Assets/css/master.css">
	<script src="Assets/js/script.js" >
	</script>
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,700i,800,800i,900,900i"
	 rel="stylesheet">
</head>

<body>

	<div class="container">

		<div class="content">
			<div class="header">

				<nav class="site-nav">

					<div class="up_nav">

						<div>
							<a href="<?php echo $base; ?>">
								<img class="site_logo" src="<?php echo $base; ?>Assets/fotos/logo.png" alt="site_logo">
							</a>
						</div>
						<ul class="right_up">
							<li>
								<span>
									<input type="text" class="search rounded" placeholder="Search...">
								</span>
							</li>
							<li>
								<a href="#">
									<img class="lang" src="<?php echo $base; ?>Assets/fotos/translation.png" alt="lang">
								</a>
							</li>
							<?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
							<li>
								<a href="login">
									<img class="login" src="<?php echo $base; ?>Assets/fotos/login.png" alt="login">
								</a>
							</li>
							
               
                <li class="nav-item">
                    <a class="nav-link" href="signup">Registrieren</a>
                </li>
			<?php endif; ?>
			<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
                <li class="nav-item">
                    <a class="nav-link" href="admin">Admin</a>
                </li>
            <?php endif; ?>
							<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
							<div class="logged_in">
								Hallo,
								<?php echo LoginController::getEmailFromSession(); ?>
								<img style="    border: 2px solid #cc8005;
    padding: 0px;
    border-radius: 30px 30px;" src="<?php echo LoginController::getImageFromSession(); ?>" <a href="<?php echo $base; ?>">
								</a>
							</div>
							<?php endif; ?>
							(<a href="<?php echo $base; ?>logout">Logout</a>)

							<li>
								<a href="<?php echo $base; ?>cart"  class="nav-link">(<img id="shopcart" src="<?php echo $base; ?>Assets/fotos/shop.png">
									<?php echo CartController::cartCount(); ?>)</a>

							</li>

						</ul>
					</div>
					<ul class="sidebar">
						<li class="accordion__item">
                        <a href="<?php echo $base; ?>"><h3>Back To Website</h3></a>
						</li>
						<li class="accordion__item">
						<a href="<?php echo $base; ?>admin/products"><h3>Products</h3></a>


						</li>
						<li class="accordion__item">
						<a href="<?php echo $base; ?>admin/users"><h3>User</h3></a>

						</li>
					</ul>
				</nav>




















<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>