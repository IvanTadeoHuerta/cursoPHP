<?php
	require_once 'config.php';

	$queryResult = $pdo->query("SELECT * FROM USERS");
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
			<h1>Lista de usuarios</h1>
			<ul>
				<li>
					<a href="index.php">Regresar al home</a>
				</li>
			</ul>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Opcion</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
						   echo '<tr>';
						   echo '<td>'.$row['name']. '</td>';
						   echo '<td>'.$row['email']. '</td>';
						   echo '<td><a href="editar.php?id='.$row['id'].'" class="btn btn-primary">Editar</a></td>';
						   echo '</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>