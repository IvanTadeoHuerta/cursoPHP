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
					<h1>Administrador</h1>
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
					<a class="btn btn-success" href="<?php echo BASE_URL; ?>/admin/nuevo">Agregar nuevo</a>
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