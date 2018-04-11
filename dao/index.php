<?php

require_once("config.php");

$sql = new Sql();

$listapresenca = $sql->select("SELECT * from listapresenca");

echo json_encode($listapresenca);



?>