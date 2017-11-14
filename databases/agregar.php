<?php
if(!empty($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password  = $_POST['password'];
}

?>
<html>
	<head>
		<title>
			Databases with platzi
		</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<h1>Agregar usuario</h1>
			<ul>
				<li>
					<a href="index.php">Regresar al home</a>
				</li>
			</ul>
			<form action="agregar.php" method="POST">
				<label for="name">Name</label>
				<input type="text" name="name" id="name">
				<br>
				<label for="email">Email</label>
				<input type="email" name="email" id="email">
				<br>
				<label for="password">Password</label>
				<input type="Password" name="password" id="password">
				<br>
				<input type="submit" value="Guardar">
			</form>
		</div>
	</body>
</html>