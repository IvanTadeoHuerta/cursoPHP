<?php

require_once 'config.php';
$result = false;

	$id = $_GET['id'];

	$sql = "DELETE FROM USERS WHERE id = :id";
	$query = $pdo->prepare($sql);

	$query->execute([
			'id' => $id
	]);

header("Location:lista.php");
?>
