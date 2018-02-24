<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Publicación</title>
</head>
<body>
	<?php 
		try{
			$base= new PDO("mysql:host=localhost; dbname=usuarios" , "root", "1234");
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql="select*from cuentas where Email= :login and Password= :password";
			$resultado=$base->prepare($sql);
			$login=htmlentities(addslashes($_POST["login"]));
			$password=htmlentities(addslashes($_POST["password"]));
			$resultado->bindValue(":login", $login);
			$resultado->bindValue(":password", $password);
			$resultado->execute();

			$numero_registro=$resultado->rowCount();

			if($numero_registro!=0){
				session_start();
				$_SESSION["usuario"]=$_POST["login"];
				header("location:../paginas/index.php");
			}else{
				header("location:../paginas/paginicio.php");
			}

		}catch(Exception $e){
			die("Error: " . $e->getMessage());

		}



	?>
</body>
</html>