<!DOCTYPE html>
<html lang="es">   
<head>    
	<meta charset="utf-8">   
	<meta name="author" content="Cristian Martínez Colín">
	<meta name="description" content="paginicio.html">
	<meta name="keyword" content="Conciertos, eventos y mucho más">
	<title>J-Party</title>
	<link rel="shortcut icon" type="image/png" href="../imagenes/logo.png"/>
	<link rel="stylesheet" href="../style/estilos principal.css" />
	<script>
		function regresar() {
			window.open("../paginas/paginicio.php")
		}
	</script>
</head>
<body>
	<div id="cuerpo">
		<header class="cabecera">
			<ul>
				<li><img id="imagen" src="../imagenes/logo.png" alt="Logo" width="100" height="100"/></li>
			    <li><p>J-Party</p></li>
			</ul>
		</header>




		<aside id="contenido">
			<h3>Menú</h3>
	    			<img src="../imagenes/1015.png"  width="200px" alt="Mi imagen por defecto">
				<nav>
					<ul>
						<hr>
						<li>Contacto</li>
						<hr>
						<li>Preguntas frecuentes</li>
						<hr>
						<li>Acerca de nosotros</li>
						<hr>
					</ul>
				</nav>
		</aside>
		<section class="catalogo"><hr>
			


<?php

	$nombre=$_POST["nombre_usuario"];
	$apellido=$_POST["apellido_usuario"];
	$mail=$_POST["mail_usuario"];
	$password=$_POST["password_usuario"];
	$edad=$_POST["edad_usuario"];
	$telefono=$_POST["telefono_usuario"];
	$direccion=$_POST["direccion_usuario"];
	$genero=$_POST["genero_usuario"];
	
	require("datos_conexion.php");
	$miconexion=mysqli_connect($db_host, $db_usuario, $db_contra);

	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la base de datos";
		exit();
	}

	mysqli_select_db($miconexion, $db_nombre) or die ("No se encuentra la base de datos");
	mysqli_set_charset($miconexion, "utf8");


	$miconsulta = "insert into cuentas (Email, Password, Nombre, Apellido, Edad, Direccion, Sexo, Intereses, Foto) VALUES ('$mail', '$password', '$nombre', '$apellido', '$edad', '$direccion', '$genero', '', '')";

	$resultado=mysqli_query ($miconexion, $miconsulta);

	if($resultado==false){
		echo "<br> Error en la consulta <br><br><br>"; 
	} else {
		echo "<br> Se ha creado un nuevo usuario con exito <br><br><br>";
	} 

	echo "<strong>Usuario:</strong> " . $mail . "<br>";

	if($genero=="Hombre"){
		echo "<p>Bienvenido " . $nombre . " " . $apellido . "</p>		 <br>";
	}else{
    echo "<p>Bienvenida " . $nombre . " " . $apellido . "</p>		 <br>";
	}
	

	mysqli_close($miconexion);
?>

<input type="button" value="Ingresar" name="regresar" id="regresar" onClick="regresar()">





			
				<div><img src="../imagenes/1016.jpg" class="textura" width="100%" height="200px" alt="Mi imagen por defecto"></div>
		</section>

				<!-- _________________________________________________________________________-->
			
		<footer>
			<small>J-Party SA de CV. Derechos reservados (2018)</small>
		</footer>
	</div>
</body>
</html>

