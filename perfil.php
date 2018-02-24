<DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Perfil</title>
	<style>
		table{
			margin:auto;
			width: 450px;
			border: 2px dotted #FF0000;
		}
	</style>
</head>
<body>

<?php 
	/*_______________________________________________________________________________*/
	/*Queda pendiente crear bien los vinculos de acceso
		Ademas de darle otros parametros a ser procesados como preferencias del usuario, etcetera*/

	/*require("../php/mail.php");
	echo "Su cuenta ha sido activada.<br>";
	echo"Bienvenido " . $nombre . " " . $apellido;/*
	/*_______________________________________________________________________________*/
?>

<form action="../php/perfil_personal.php" method="post" enctype="multipart/form-data">
	<table>
		<tr><td><label for="imagen">Imagen:</label></td>
			<td><input type="file" name="imagen" size="20"></td></tr>
		<tr><td colspan="2" style="text-align:center"><input type="submit" value="Enviar archivo"></td></tr>
	</table>
</form>

</body>
</html>