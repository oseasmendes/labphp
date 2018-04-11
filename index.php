
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Lista Membros</title>
		<limk rel="stylesheet" href="css/estilo.css">

	</head>
	<body>
		<?php

			include "cnn\cnn.php";

			$stmt = $conn->prepare("select * from membros order by nome limit 10");

			$stmt -> execute();

			$results = $stmt -> fetchall(PDO::FETCH_ASSOC);

				foreach ($results as $row) 
				{
					foreach ($row as $key => $value) 
					{
					# code...
					echo "<strong>".$key."</strong>".$value."<br/>";
				}	
				# code...
				echo "============================================ <br>";
				
			}

			#var_dump($results);

			?>

		
	</body>

</html>



