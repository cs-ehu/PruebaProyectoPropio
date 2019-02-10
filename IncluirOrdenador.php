<?php

// Validamos que se ha introducido algo en el campo Nombre
if (strlen($_POST["Nombre"]) == 0){
echo "<script type='text/javascript'>alert('El campo del nombre está vacío');</script>";
die();
}

// Validamos que se ha introducido algo en el campo Nombre
if (strlen($_POST["Marca"]) == 0){
echo "<script type='text/javascript'>alert('El campo de la marca está vacío');</script>";
die();
}

// Validamos que se ha introducido algo en el campo Nombre
if ($_POST["Precio"] <= 0){
echo "<script type='text/javascript'>alert('El precio debe ser mayor que 0');</script>";
die();
}

$file = 'data/Ordenadores.xml';
if(!file_exists($file)) // Si no existe el fichero XML
{
	$Ordenadores = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>
		<Ordenadores>
		</Ordenadores>');
}
else{
	$Ordenadores = simplexml_load_file($file); //Abrimos nuestro fichero xml
}
if(!$Ordenadores){
	echo 'Error: No se puede cargar el fichero Ordenadores.xml';
		die();
}else{
	$nuevoOrdenador = $Ordenadores->addChild('Ordenador');

	$nuevoOrdenador->addChild('Nombre', $_POST['Nombre']);
	$nuevoOrdenador->addChild('Marca', $_POST['Marca']);
	$nuevoOrdenador->addChild('Precio', $_POST['Precio']);

	$domxml = new DOMDocument('1.0');
	$domxml->preserveWhiteSpace = false;
	$domxml->formatOutput = true;
	$domxml->loadXML($Ordenadores->asXML());
	$domxml->save($file);
	echo "<script type='text/javascript'>
			alert('Su ordenador se ha guardado correctamente!');
			window.location.assign('Ordenadores.php');
			</script>";
			die();
	}
?>