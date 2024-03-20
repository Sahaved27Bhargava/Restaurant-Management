<?php

require 'connection_reg.php';

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $query = "INSERT INTO registration VALUES('','$username','$email','$password')";
    mysqli_query($conn, $query);
    echo "<script>alert('data interted/registred');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
.container {
	max-width: 750px;
}

.form-group {
	margin-bottom: 20px;
}

.btn-primary {
	margin-top: 20px;
}

h2 {
	text-align: center;
	margin-bottom: 30px;
}

form {
	background-color: #fff;
	padding: 30px;
	border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

label {
	font-weight: 600;
}

input[type="text"],
input[type="email"],
input[type="password"] {
	border: none;
	border-bottom: 2px solid #ccc;
	padding: 10px;
	font-size: 16px;
	color: #555;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
	outline: none;
	border-bottom-color: #6fa8dc;
}

.btn-primary {
	background-color: #6fa8dc;
	border-color: #6fa8dc;
}

.btn-primary:hover {
	background-color: #5d93c4;
	border-color: #5d93c4;
}
body{
    background-image: url(pexels-polina-tankilevitch-3872263.jpg);
}
    </style>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2>Signup</h2>
				<form action="" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<button type="submit" name="submit" class="btn btn-primary">Signup</button>
                    <p style="padding: 20px 0 0 0;">Already have an Account?</p>
                    <a href="loginwebtech.php">Go to Login page</a>
				</form>
			</div>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
