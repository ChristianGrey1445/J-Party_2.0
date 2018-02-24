<!DOCTYPE html>
<html lang="es">   
<head>    
	<meta charset="iso-8859-1">   
	<meta name="author" content="Cristian Martínez Colín">
	<meta name="description" content="index.html">
	<meta name="keyword" content="Conciertos, eventos y mucho mas">
	<title>J-Party</title>
	<link rel="shortcut icon" type="image/png" href="../imagenes/logo.png"/>
	<link rel="stylesheet" href="../style/estilos principal.css" />
	<script>
		function abrir() {
			window.open("comprar.html")
		}
	</script>
</head>
<body>
	<div id="cuerpo">
		<header class="cabecera">
			<ul>
				<li><img id="imagen" src="../imagenes/logo.png" alt="J-Party" width="100" height="100"/></li>
			    <li><p>J-Party</p></li>
			</ul>
		</header>
		<aside id="contenido">
			<?php
				
				session_start();
				if(!isset($_SESSION["usuario"])){
					header("Location:paginicio.php");
				}

						echo "<img id='imagen' src='../imagenes/perfil.png' align='left' alt='Perfil' width='50' height='50'/>";
						echo $_SESSION["usuario"] . "<br><br>";
						echo "<a href='../php/cerrar_session.php'>Cerrar sesión</a>";
		
			?>
			<nav>
				<iframe height="315px" width="100%" src="contacto.html" name="damas"></iframe> 
				<ul>
					<hr>
					<li>Perfil</li>
					<hr>
					<li>Amigos</li>
					<hr>
					<li>Eventos</li>
					<hr>
					<li>Fotos</li>
					<hr>
					<li>Calendario</li>
					<hr>
					<li>Mapa</li>
					<hr>
					<li>Ajustes</li>
					<hr>
				</ul>
				
				
			</nav>
		</aside>
		<section class="catalogo">
			
<div id="header">
			<nav> 
				<ul class="nav">
					<li><a href="">Inicio</a>
						<ul>
							<li><a href="preguntas.html">Acerca de nosotros</a></li>	
							<li><a href="preguntas.html">Preguntas frecuentes</a></li>
							<li><a href="">Redes sociales</a>
								<ul>
									<li><a href="https://www.facebook.com/Clotheshtml9822-308286016338880/?modal=admin_todo_tour/" title="facebook " target="_blank">facebook</a></li>
									<li><a href="https://www.youtube.com/channel/UCCP_VmKwdxDm7meCF_dhkGw" title="youtube" target="_blank">youtube</a></li>
									<li><a href="https://www.instagram.com/clothes.html9822/" title="instagram" target="_blank">instagram</a></li>
									<li></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="">Dama</a>
						<ul>
							<li><a href="vestidos.html" title="vestidos" target="_blank">vestidos</a></a></li>
							<li><a href="damas.html" title="playeras" target="_blank">playeras </a></a></li>
							<li><a href="">Accesorios</a>
								<ul>
									<li><a href="bolsos.html" title="bolsos" target="_blank">bolsos</a></a></li>
									<li><a href="joyas.html" title="joyerias" target="_blank">joyeria</a></a></li>
									<li><a href="temporada.html" title="temporada" target="_blank">temporada</a></a></li>
									<li><a href="zapato.html" title="zapatos" target="_blank">zapatos </a></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="">Caballero</a>	
						<ul>
							<li><a href="caballeros.html" title="playeras" target="_blank">playeras </a></li>
							<li><a href="camisas.html" title="camisas" target="_blank">camisas</a></li>
							<li><a href="gorros.html" title="gorros" target="_blank">gorros</a></li>
							<li><a href="sudaderas.html" title="sudaderas" target="_blank">sudaderas</a></li>
						</ul></li>
					<li><a href="">Junior</a>
						<ul>
							<li><a href=""><a href="junior.html" title="junior" target="_blank">Playeras</a></li>
							<li><a href="chamarras de niños.html" title="chamarras" target="_blank">chamarras</a>></li>
							<li><a href="sudaderas junio.html" title="sudaderas junior" target="_blank">sudaderas</a></li>
						</ul></li>
					<li><a href="">Personalizada</a> 
						<ul>
						<li><a href="index.html#peliculas">Peliculas</a></li>
						<li><a href="index.html#anime">Anime</a></li>
						<li><a href="index.html#caricaturas">Caricaturas</a></li>
						<li><a href="index.html#comics">Comics</a></li>
					</ul></li>
					<li><input type="text" name="buscar" value="Buscador" /></li>  
					<li><input type="button" value="Buscar"></li>
				</ul>
			</nav><!-- Aqui estamos cerrando la nueva etiqueta nav -->
		</div>
			<nav>
				<ul>
					<li><ul>
						<li id="peliculas"><img src="../imagenes/1001.jpg" alt="Poster" width="200px"></li>
						<li><strong>EDC CDMx</strong><br />Sede: Monterrey, México<br />Entradas disponibles: 527<br />Precio: $2,000</li>
						<li><input type="button" value="Comprar"></li>
					</ul></li>
					<hr />
					<li><ul>
						<li id="caricaturas"><img src="../imagenes/1002.jpg" alt="Poster" width="200px"></li>
						<li><strong>Tomorrowland</strong><br />Sede: Rio de Janeiro, Brasil<br />Entradas disponibles: AGOTADO<br />Precio: $50,000</li>
						<li><input type="button" value="Comprar" onClick="abrir()" /></li>
					</ul></li>
					<hr />
					<li><ul>
						<li id="comics"><img src="../imagenes/1003.jpg" alt="Poster" width="200px"></li>
						<li><strong>Day Dream</strong><br />Sede: Veracruz, México<br />Entradas disponibles: 400<br />Precio: $1500</li>
						<li><input type="button" value="Comprar" onClick="abrir()" /></li>
					</ul></li>
					<hr />
					<li><ul>
						<li><img src="../imagenes/1004.jpg" alt="Poster" width="200px"></li>
						<li><strong>Expo Tatoo</strong><br />Sede: Estado de México, México<br />Entradas disponibles: Libre<br />Precio: Gratis</li>
						<li><input type="button" value="Comprar" onClick="abrir()" /></li>
					</ul></li>
					<hr />
					<ul>
					<li><ul>
						<li><img src="../imagenes/1005.png" alt="Poster" width="200px"></li>
						<li><strong>Campus Party 2018</strong><br />Sede: Guadalajara, México<br />Entradas disponibles: 20,000<br />Precio: $700</li>
						<li><input type="button" value="Comprar" onClick="abrir()" /></li>
					</ul></li>
					<hr />
					<ul>
					<li><ul>
						<li><img src="../imagenes/1006.png" alt="playera" width="200px"></li>
						<li><strong>EDUFIME</strong><br />Sede: Acapulco, México<br />Entradas disponibles: Libre<br />Precio: Gratis</li>
						<li><input type="button" value="Comprar" onClick="abrir()" /></li>
					</ul></li>
					<hr />
					<ul>
					<li><ul>
						<li id="anime"><img src="../imagenes/1007.jpg" alt="playera" width="200px"></li>
						<li><strong>Festival de las almas</strong><br />Sede: Estado de México, México<br />Entradas disponibles: Libre<br />Precio: Gratis</li>
						<li><input type="button" value="Comprar" onClick="abrir()" /></li>
					</ul></li>
					<hr />
				</ul>
			</nav>
		</section>
		<footer>
			<small>Clothes SA de CV. Derechos reservados (2017)</small>
		</footer>
	</div>
</body>
</html>