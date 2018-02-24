<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Publicaciones</title>
</head>
<body>

<?php
	$miconexion=mysqli_connect("localhost", "root", "1234", "usuarios");

		if(!$miconexion){
			echo "La conexión ha fallado: " . mysqli_error();
			exit();
		}	

		$miconsulta= "SELECT * FROM CONTENIDO ORDER BY FECHA DESC";
		echo "<h1><center>Publicaciones</center></h1>";

		if($resultado=mysqli_query($miconexion, $miconsulta)){
			while($registro=mysqli_fetch_assoc($resultado)){
				echo "<h3>" . $registro['Titulo'] . "</h3>";
				echo "<small>" . $registro['Fecha'] . "</small>";
				echo "<div style='width:400px'>" . $registro['Comentario'] . "</div><br><br>";

				if($registro['Imagen']!=""){
					echo "<img src='pictures/" . $registro['Imagen'] . "' width='300px' />";
				}

				echo "<hr />";
			}
		}

?>


</body>
</html>