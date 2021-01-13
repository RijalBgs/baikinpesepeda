<?php 
require __DIR__ . '/../Core/LogoutController.php';

if(isset($_POST['logout'])){
	$logout = new LogoutController;
	$logout->Logout();
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
</head>
<body>
	<h1>Halaman User</h1>
	<form method="post" action="user.php">
		<input type="submit" name="logout" value="Logout">
	</form>

</body>
</html>