<?php  

	require_once('koneksi.php');

	$nameSkill = $_POST['nameSkill'];
	$id = $_POST['id'];

	$stmt = $db->prepare("INSERT INTO skills ( name, user_id ) VALUES ( :name, :id )");
	$stmt->bindParam(":name", $nameSkill);
	$stmt->bindParam(":id", $id);

	$stmt->execute();

	echo "{}";

?>