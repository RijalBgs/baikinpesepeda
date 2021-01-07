<?php 
require __DIR__ . '/../Core/LoginController.php';

session_start();

if(isset($_POST['submit'])){
	$login = new LoginController;
	$login->getData($_POST['username'], $_POST['password']);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>	
	<?php 
		if(isset($_POST['submit'])){
			echo "$login->message";
			}
	?>
		<h1 align="center">Form Login</h1>
			<form method="post" action="login.php">

				<div align="center">
					<input type="text" name="username" placeholder="Username">
				</div>

				<div align="center">
					<input type="password" name="password" placeholder="Password">
				</div>

				<div align="center">
				<input type="submit" name="submit" value="Login">
					<a href="register.php">Register</a>
				</div>

			</form>
		
</body>
</html>