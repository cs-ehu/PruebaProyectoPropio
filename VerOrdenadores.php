<!DOCTYPE html>
<html lang="en">
	<head>
		<script>
function ajax(f){
	if(XMLHttpRequest){
		var xhr = new XMLHttpRequest();
	}else{
		var xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}
	var Nombre = f.BNombre.value;
	var Marca = f.BMarca.value;
	var Min = f.BMin.value;
	var Max = f.BMax.value;

	var URL = 'ObtenerOrdenador.php?BNombre='+Nombre+'&BPorMarca='+Marca+'&BMin='+Min+'&BMax='+Max;
	xhr.open('GET', URL, true);
	xhr.onreadystatechange = function() {
		 if(xhr.readyState == 4 && xhr.status == 200){
			document.getElementsByClassName("w3-table-all")[0].innerHTML = xhr.responseText;
		 }

	}
	
	xhr.send('');

}
</script>
<?php
	$xml = simplexml_load_file("data/Ordenadores.xml");
	session_start();
?>
<link href="stilo/login.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Ver Ordenadores</title>
		
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
	<br/>
	<h3 style="color: green"> Aqui se muestran todos los ordenador disponibles en la base de datos:</h3>
<table class="w3-table-all">
  <thead>
    <tr class="w3-light-grey w3-hover-red">
      <th>Nombre</th>
      <th>Marca</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($xml->Ordenador as $Ordenadores) :?>
    <tr class="w3-hover-green">
      <td><?php echo $Ordenadores->Nombre; ?></td>
      <td><?php echo $Ordenadores->Marca; ?></td>
      <td><?php echo $Ordenadores->Precio; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

<form>
	
	<p>Busqueda especial de ordenadores:</p>
	<ul>
		<li>Buscar Ordenador por nombre:<input type="text" name="BNombre"> </li>
		<li>Buscar Ordenador por Marca: <input type="text" name="BMarca"> </li>
		<li>Buscar Ordenador por rango de precio: min:<input type="number" name="BMin">€ max:<input type="number" name="BMax">€</li>
		<li><input type="button" onclick="ajax(this.form)" value="Actualizar tabla"></li>
	</ul>
</form>
<footer class="footer">
			<p style="font-size: 20px;">¿Quienes somos?</p>
			<p>Somos el grupo 12 de SAR y hemos realizado esta catálogo online de tecnología.</p>
		</footer>
	</body>

</html>
