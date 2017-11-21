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
					<?php 
					foreach($blogPosts as $blog){
						echo '<div class="blog-post">';
							echo '<h2>'. $blog['titulo'] .'</h2>';
							echo '<p>Jan  1, 2020 by <a href="">Alex</a></p>';
							echo '	<img src="https://thumb7.shutterstock.com/display_pic_with_logo/114085/324472871/stock-vector-november-sign-with-colour-	confetti-vector-paper-illustration-324472871.jpg" alt ="">';
								echo '<div class="blog-post-image">';
								echo '<div class="blog-post-content">';
								echo $blog['contenido'];
								echo '</div>';
								echo '</div>';
						echo '</div>';
					}
					?>			
				</div>
				<div class="clo-md-4">
					SideBar
				</div>
			</div>
			<div class="row">
			<div class="col-md-12">
				<footer>
					Este es un pie de pagina
					<a href="admin/index.php">Admin</a>
				</footer>
			</div>
			</div>
		</div>
	</body>
</html>