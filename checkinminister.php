<?php

	include "cnn\cnn.php";

	$stmt = $conn ->prepare("INSERT INTO listapresenca (membro_id,agenda_id) VALUES (:membro,:agenda)");

	$membro = 10;
	$agenda = 500;

	$stmt->bindParam(":membro",$membro);
	$stmt->bindParam(":agenda",$agenda);

	$stmt -> execute();

	echo "Inserido OK";


?>