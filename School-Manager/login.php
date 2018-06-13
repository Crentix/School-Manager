<?php include('header.php') ?>

<div id="login-section" class="login-section">
	<h2>Login</h2>
	<form method="POST" action="index.php">
		<label for="username">Username</label>
		<input type="text" name="username" placeholder="Enter Username" 
		<?php 
			if(isset($_SESSION['username'])){
				if(!empty($_SESSION['username'])){
					echo 'value="' . $_SESSION["username"] . '"';
				}
			}
		?>
		>
		<label for="password">Password</label>
		<input type="password" name="password" placeholder="Enter Password">
		<div id="error-password" class="error"><p>Password is empty</p></div>
		<div class="login-button">
			<button type="submit" name="login">Log me in</button>
		</div>
		<div id="error-submit" class="error"><p>Incorrect Username or Password</p></div>
	</form>
</div>

<?php include('footer.php') ?>