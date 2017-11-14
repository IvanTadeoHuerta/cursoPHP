<?php

require_once 'config.php';
$result = false;

	$id = $_GET['id'];

	$sql = "DELETE FROM USERS WHERE id = :id";
	$query = $pdo->prepare($sql);

	$query->execute([
			'id' => $id
	]);


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
			<h1>Update User</h1>
			<ul>
				<li>
					<a href="index.php">Regresar al home</a>
				</li>
			</ul>
			<?php
			 if($result){
			 	echo '<div class="alert alert-success">Actualizo correctamente!</div>';
			 }
			?>
			<form action="editar.php" method="POST">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" value="<?php echo $nameValue ?>">
				<br>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="<?php echo $nameEmail ?>">
				<br>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<input type="submit" value="Guardar">
			</form>
		</div>
	</body>
</html>