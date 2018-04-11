
<?php

	include "cnn\cnn.php";

	$stmt = $conn ->prepare("DELETE from listapresenca WHERE id = :id");

	$id = 1;
	
	$stmt->bindParam(":id",$id);

	$stmt -> execute();

	echo "Delete OK";


?>