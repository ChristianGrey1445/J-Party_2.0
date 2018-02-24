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
			
			<nav>
				<h1><center>Registro</center><h1>
				
				<form class="tabla" action="../php/insertar_usuarios.php" method="post" name="datos_usuario" id="datos_usuario">
				<center><table width="15%" align="center" class="user">
					<tr>
						<td><p>Nombre:</p></td>
						<td><input type="text" name="nombre_usuario" id="nombre_usuario"></td>
					</tr>
					<tr>
						<td><p>Apellido:</p></td>
						<td><input type="text" name="apellido_usuario" id="apellido_usuario"></td>
					</tr>
					<tr>
						<td><p>E-mail:</p></td>
						<td><input type="email" name="mail_usuario" id="mail_usuario"></td>
					</tr>
					<tr>
						<td><p>Contraseña:</p></td>
						<td><input type="password" name="password_usuario" id="password_usuario"></td>
					</tr>
					<tr>
						<td><p>Edad:</p></td>
						<td><input type="date" name="edad_usuario" id="edad_usuario"></td>
					</tr>
					<tr>
						<td><p>Telefono:</p></td>
						<td><input type="tel" name="telefono_usuario" id="telefono_usuario"></td>
					</tr>
					<tr>
						<td><p>Dirección:</p></td>
						<td><input type="text" name="direccion_usuario" id="direccion_usuario"></td>
					</tr>
					<tr>
						<td><p>Genero:</p></td>
						<td><select name="genero_usuario" id="genero_usuario">
				                <option>Hombre</option>
				                <option>Mujer</option>
				            </select></td>
					</tr>
					<tfoot>
						<tr>
							<td></td>
							<td rowspam=2 align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td></td>
						</tr>
					</tfoot>
				</table>
				
			</center>
				</form>
				</nav>
				<div><img src="../imagenes/1016.jpg" class="textura" width="100%" height="200px" alt="Mi imagen por defecto"></div>
		</section>

				<!-- _________________________________________________________________________-->
			
		<footer>
			<small>J-Party SA de CV. Derechos reservados (2018)</small>
		</footer>
	</div>
</body>
</html>