<?php
namespace App\Controller\Admin\PostController;

class PostController{
	public function getCreate(){
		return render('../views/admin/nuevo.php');
	}

	public function getCreate(){
		global $pdo;
		$query = $pdo->prepare('SELECT * FROM blog_post ORDER BY id DESC');
			$query->execute();
			$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
			return render('../views/admin/posts.php' , ['blogPosts' => $blogPosts]);
	}

	public function postCreate(){
		global $pdo;
		$result = false;

		$sql = 'INSERT INTO blog_post (titulo, contenido) values (:titulo,:contenido)';
		$query = $pdo->prepare($sql);
		$result = $query->execute([
			'titulo' => $_POST['titulo'],
			'contenido' => $_POST['contenido']
		]);

	return render('../views/admin/nuevo.php',['result'=>$result]);
	}

}

?>