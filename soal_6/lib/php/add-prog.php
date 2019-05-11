<?php  

	require_once('koneksi.php');

	$name = $_POST['name'];

	$stmt = $db->prepare("INSERT INTO users ( name ) VALUES ( :name )");
	$stmt->bindParam(":name", $name);

	$stmt->execute();

	echo "{}";

?>