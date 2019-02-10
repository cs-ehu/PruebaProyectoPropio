<!DOCTYPE html>
<html lang="en">
	<head>
		<script type="text/javascript">
	function obtenerOrdenadores(){
	document.getElementById('NOrdenadores').value = "<?php $i=0; $xml = simplexml_load_file('data/Ordenadores.xml'); foreach ($xml->Ordenador as $Ordenadores): $i = $i+1; endforeach; echo $i;?>";
}
</script>
		<title>Ordenadores</title>
		<?php 
			session_start();
		?>
		<link href="stilo/login.css" rel="stylesheet" type="text/css"/>
	</head>
	<body onload="obtenerOrdenadores()">
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
		<br/>
		<p>Rellene los siguientes campos para añadir un ordenador</p>
		<form action="incluirOrdenador.php" method="POST">
			<ul>
				<li>Nombre del Ordenador: <input type="text" name="Nombre"> </li>
				<li>Marca del Ordenador: <input type="text" name="Marca"></li>
				<li>Precio del Ordenador: <input type="number" name="Precio"> €</li>
			</ul>
			<input type="submit" name="submit" value="Añadir ordenador" <?php if ((isset($_SESSION['tipo']) && $_SESSION['tipo'] != 'Vendedor') || !isset($_SESSION['tipo'])) { echo 'disabled';  } ?> > <?php if ((isset($_SESSION['tipo']) && $_SESSION['tipo'] != 'Vendedor') || !isset($_SESSION['tipo'])) { ?> <p style="color: red">Esta logueado como comprador o no se encuentra logueado.</p> <?php } ?>
		</form>
		<p>Si quiere ver todos los Ordenadores en la Base de datos haga <a href="VerOrdenadores.php"> click aqui .</a></p>
		<form>
		<p>El total de ordenadores en nuesta base de datos es de: <input type="text" id="NOrdenadores" name="NOrdenadores" disabled value=""></p>
		</form>
		<footer class="footer">
			<p style="font-size: 20px;">¿Quienes somos?</p>
			<p>Somos el grupo 12 de SAR y hemos realizado esta catálogo online de tecnología.</p>
		</footer>
	</body>

</html>
