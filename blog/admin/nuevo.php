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
					<h1>Administrador- agregar nuevo post</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					 <form action="/action_page.php" method="post">
						    <div class="form-group">
						      <label for="titulo">Email:</label>
						      <input type="titulo" class="form-control" id="titulo" placeholder="Ingresa titulo" name="titulo">
  								<label for="contenido">Contenido:</label>
						      <textarea name="contenido" class="form-control" id="contenido" cols="30" rows="10"></textarea>
						    </div>
						    
						    <button type="submit" class="btn btn-default">ENVIAR</button>
						  </form>
				</div>
				<div class="clo-md-4">
					
				</div>
			</div>
			<div class="row">
			</div>
		</div>
	</body>
</html>