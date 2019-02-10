<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<?php 
		session_start();
		?>
		<link href="stilo/login.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<header class="header"> 
				<ul>
					<li> <a href="index.xhtml"><img alt="imgLogo" src="img/logo.jpg" class="logo"/></a></li>
					<li> <span class="logoTexto">GRUPO 12</span></li>
				</ul>
				<ul class="cabecera">
					<li><a href="Ordenadores.php">Ordenadores</a></li>
					<li><a href="Smartphones.php">Smartphones</a></li>
					<li><a href="Consolas.php">Consolas</a></li>
					<li><a href="Registro.php">Registro</a></li>
					<li><a href="Login.php">Login</a></li>
					<li><a href="Logout.php">Logout</a></li>
				</ul>
			
		</header>
			<?php 
				if (isset($_SESSION['tipo'])) {
					echo "<p> Usted ya esta Logueado!";
				}else{
			?>
			Rellena los siguientes datos para hacer login:
			<form action="ConfirmarLogin.php" method="POST">
				<ul>
					<li>Introduce tu nombre de usuario o tu correo: <input type="text" name="usuario"></li>
					<li>Introduce tu contraseña: <input type="password" name="pass"></li>
				</ul>
				<input type="submit" name="login" value="Login">
			</form>
			<?php 
		}
			?>
		<footer class="footer">
			<p style="font-size: 20px;">¿Quienes somos?</p>
			<p>Somos el grupo 12 de SAR y hemos realizado esta catálogo online de tecnología.</p>
		</footer>
	</body>

</html>