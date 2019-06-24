<?php require_once __DIR__ . '/../Partials/Header.php'; ?>

<div class="card-body">
	<h5 class="card-title text-center">Sign UP</h5>

	<?php
                        if (isset($error)) {
                            echo "<p class=\has-error\">$error</p>";
                        }
                        ?>
                        
	<form class="form-signin" method="post">
    <div class="login_image">
			<img src="Assets/fotos/profilefoto.png" alt="">
		</div>
		
		<div class="form-label-group">
			<input type="text" id="name" class="form-control" name="name" placeholder="Name" required autofocus>
			<label for="name">Name</label>
		</div>
		<div class="form-label-group">
			<input type="text" id="email" class="form-control" name="email" placeholder="Email address" required autofocus>
			<label for="email">Email address</label>
		</div>

		<div class="form-label-group">
			<input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
			<label for="password">Password</label>
		</div>
		<div class="form-label-group">
			<input type="password" id="password_repeat" class="form-control" name="password_repeat" placeholder="Password" required>
			<label for="password_repeat">Password Repeat</label>
		</div>


		<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign UP</button>
	</form>
</div>

<?php require_once __DIR__ . '/../Partials/Footer.php'; 