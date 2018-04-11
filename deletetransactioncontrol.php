<?php

	include "cnn\cnn.php";


	$conn->beginTransaction();

	$stmt = $conn ->prepare("DELETE from listapresenca WHERE id = ?");

	$id = 3;	
	
	$stmt -> execute(array($id));

	//$conn->rollback();

	$conn->commit();


	echo "Delete OK";


?>