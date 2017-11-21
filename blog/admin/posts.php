<?php
include_once '../config.php';
$query = $pdo->prepare('SELECT * FROM blog_post ORDER BY id DESC');
$query->execute();
$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
	<head>
		<title>
			Blog
		</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Blog Ivan Tadeo</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<table class="table">
					  <thead>
					  	<tr>
					  		<th>Titulo</th>
					  		<th>Editar</th>
					  		<th>Eliminar</th>
					  	</tr>
					  </thead>
					  <tbody>
							<?php
							 foreach ($blogPosts as $key => $blog) {
							 	 echo '<tr>';
								 echo '<td>' . $blog['titulo'] . '</td>';
								 echo '<td><button class="btn btn-primary">Editar</button></td>';
								 echo '<td><button class="btn btn-danger">Eliminar</button></td>';
								 echo '</tr>';
								 
							 }
							?>
					  </tbody>
					</table>	
				</div>
				<div class="clo-md-4">
					SideBar
				</div>
			</div>
			<div class="row">
			<div class="col-md-12">
				<footer>
					Administracion de los post
				</footer>
			</div>
			</div>
		</div>
	</body>
</html>