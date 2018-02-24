<!DOCTYPE html>
<html lang="es">   
<head>    
	<meta charset="utf-8">   
	<meta name="author" content="Cristian Martínez Colín">
	<meta name="description" content="paginicio.html">
	<meta name="keyword" content="Conciertos, eventos y mucho mas">
	<title>J-Party</title>
	<link rel="shortcut icon" type="image/png" href="../imagenes/logo.png"/>
	<link rel="stylesheet" type="text/css" href="../style/estilos principal.css" /> 
	<SCRIPT LANGUAGE="JavaScript"> 
		function abrir() {
			window.open("pagregistro.php")
		}
	
		function carga(nom) {  
			nombo = nom + "2.png";  
			document.images[nom].src = nombo; 
		}  
		function descarga(nom) {  
		nombo = nom + ".png";  
		document.images[nom].src = nombo; 
		} 
	</SCRIPT>
</head>
<body>
	<div id="cuerpo">
		<header class="cabecera">
			<ul>
				<li><img id="imagen" src="../imagenes/logo.png" alt="Logo" width="100" height="100"/></li>
			    <li><p>J-Party</p></li>
			</ul>
		</header>
		
				<!-- -____________________________________________________________________________________________________ -->
		<aside id="contenido">
			<h2>Registro</h2>
	    			<img src="../imagenes/1015.png"  width="180px" alt="Mi imagen por defecto">

				<form action="../php/validacion.php" method="post" name="datos_usuario" id="datos_usuario">
				<center><table width="15%" align="center" class="user">
					<tr>
						<td><strong>Usuario:</strong></td>
						<td><label for="login"></label>
							<input type="text" name="login" id="login"></td>
					</tr>
					<tr>
						<td><strong>Contraseña:</strong></td>
						<td><label for="password"></label>
							<input type="password" name="password" id="password"></td>
					</tr>
					<tr>
						<td align="right"><input type="checkbox" name"cookie" id="cookie"></td>
						<td align="center"><p>Recordar usuario</p></td>
					</tr>
					<tr>
						<td align="right"><input type="button" name="registrarse" id="enviando" onClick="abrir()" value="Registrarse"></td>
						<td align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
					</tr>
					<tfoot>
						<tr>
							<td colspan="2" align="center"><a href="comprar.html">¿Olvidaste tu contraseña?</a></td>
						</tr>
					</tfoot>
				</table>
				
			</center>
				</form>
		</aside>
			<!-- ____________________________________________________________________________________________________________ -->
		
		<section class="catalogo"><hr>
			<nav>
				<br><br><br>
				<center><h2>Enterate de todos los eventos<br> mas cerca de ti</h2><center><br><br>
				<a href="pagregistro.html" onmouseover="carga('uno')"  onmouseout="descarga('uno')";> 
				<img src="uno.png" name="uno" border=0></a> <br><br><br>

				<a href="pagregistro.html" onmouseover="carga('dos')"  onmouseout="descarga('dos')";> 
				<img src="dos.png" name="dos" border=0></a> <br><br><br>
			</nav>
		</section>
		<footer>
			<small>J-Party SA de CV. Derechos reservados (2018)</small>
		</footer>
	</div>
</body>
</html>