<?php

	include "cnn\cnn.php";

	$stmt = $conn ->prepare("UPDATE listapresenca SET membro_id = :membro,agenda_id = :agenda WHERE id = :id");

	$id = 1;
	$membro = 20;
	$agenda = 800;

	$stmt->bindParam(":membro",$membro);
	$stmt->bindParam(":agenda",$agenda);
	$stmt->bindParam(":id",$id);

	$stmt -> execute();

	echo "Alterado OK";


?>