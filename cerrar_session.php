<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Publicación</title>
</head>
<body>
	<?php 
				session_start();
				session_destroy();
				header("location:../paginas/paginicio.php");
			
	?>
</body>
</html>