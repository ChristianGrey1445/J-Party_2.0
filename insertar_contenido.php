<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Publicación</title>
</head>
<body>
<?php
	$miconexion=mysqli_connect("localhost", "root", "1234", "usuarios");

	if(!$miconexion){
		echo "La conexión ha fallado: " . mysqli_error();
		exit();
	}	

	if($_FILES['imagen']['error']){
		switch ($_FILES['imagen']['error']) {
			case 1:
				echo "El tamaño del archivo exede lo permitido por el servidor";
				break;
			case 2;
				echo "El tamaño del archivo exede los 2MB";
				break;
			case 3;
				echo "Elenvio del archivo se interrumpio";
				break;
			case 4;
				echo "No se ha enviado ningún archivo";
				break;
		}
	}else{
		echo "Imagen publicada exitosamente <br>";

		if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] ==UPLOAD_ERR_OK))){

			$destino_ruta="pictures/";
			move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_ruta . $_FILES['imagen']['name']);
			echo "El archivo <strong>" . $_FILES['imagen']['name'] . " </strong> se ha copiado en el directorio de pictures.";
		}else{
			echo "El archivo no se ha podido copiar al directorio pictures.";
		}
	}

	$eltitulo=$_POST['campo_titulo'];
	$lafecha=date("Y-m-d H:i:s");
	$elcomentario=$_POST['area_comentarios'];
	$laimagen=$_FILES['imagen']['name'];

	$miconsulta="INSERT INTO CONTENIDO (Titulo, Fecha, Comentario, Imagen) VALUES ('" . $eltitulo . "', '" . $lafecha . "', '" . $elcomentario . "', '" . $laimagen . "')";

	$resultado=mysqli_query($miconexion, $miconsulta);

	mysqli_Close($miconexion);

	echo "<br> Se ha agregado la publicación con exito <br><br><br>"
?>

<a href="perfil_personal.php">Ver publicaciones</a>

</body>
</html>