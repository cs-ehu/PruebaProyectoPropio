<!DOCTYPE html>
<html lang="en">
	<head>
		<script type="text/javascript" src="script/validarRegistro.js"></script>
		<link href="stilo/login.css" rel="stylesheet" type="text/css"/>
		<title>Registro</title>
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

		Rellena los siguientes datos para poder registrarte:
			<form action="ConfirmarRegistro.php" method="POST">
				<ul>
					<li>Introduce tu nombre: <input type="text" name="nombre"></li>
					<li>Introduce tu nombre de usuario: <input type="text" name="usuario"></li>
					<li>Introduce tu email: <input type="text" name="email"></li>
					<li>Introduce tu contraseña: <input type="password" name="pass1"></li>
					<li>Repite la contraseña: <input type="password" name="pass2"></li>
					<li><select name="TipoDeUsuario" id="TipoDeUsuario">
						<option value="Vendedor" selected="selected">Vendedor</option>
						<option value="Comprador">Comprador</option>
					</select></li>
				</ul>
				<br/>
				<input type="submit" name="envio" value="Registrarse" onclick="return validarForm(this.form);">
			</form>
			<footer class="footer">
			<p style="font-size: 20px;">¿Quienes somos?</p>
			<p>Somos el grupo 12 de SAR y hemos realizado esta catálogo online de tecnología.</p>
		</footer>
	</body>

</html>