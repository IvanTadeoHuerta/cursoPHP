<?php 
$dbHost = 'localhost';
$dbname = 'cursophp';
$dbUser = 'root';
$dbPass = '';
try{
	$pdo = new PDO("mysql:host=$dbHost;dbname=$dbname","$dbUser","$dbPass");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
	echo $e->getMessage();
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
			<h1>Databases</h1>
			<ul>
				<li>
					<a href="">Lista de usuario</a>
				</li>
				<li>
					<a href="">Agregar usuario</a>
				</li>
			</ul>
		</div>
	</body>
</html>