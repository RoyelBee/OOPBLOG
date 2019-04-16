<?php 
	include "libs/DB.php";
	$db= new DB();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
	body{
		background-color:  silver;
		padding: 0; 
		margin: 0;
	}

	#form{
		width: 30%;
		height: 400px;
		background-color: white;
		margin: 0 auto;
		padding: 20px;
	}
	input{
		width: 200px;
		height: 25px;
		margin: 5px;
		display: block;
	}
	label{
		font-weight: bold;
		height: 25px;
	}
	

	</style>
</head>
<body>

<div id="form">
	<h2>Registration Form </h2>
	<form method="post" action="registration.php">
		<label>User Name: </label>
		<input type="text" name="name" placeholder= "Your name" required= "1">

		<label>Email: </label>
		<input type="text" name="email" placeholder= "examole@gmail.com" required= "1">

		<label>Password: </label>
		<input type="password" name="password" placeholder= "Set a strong password" required= "1">
		</br>	

		<input type="submit" name="registration" value="Sign Up">	
		
	</form>
</div>

</body>
</html>


<?php 
	if (isset($_POST['registration'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];


		$query = "insert into users (name, email, password) values ('$name', '$email','$password')";

		$db->insert($query);
	}


?>