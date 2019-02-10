<?php

// Validamos que se ha introducido algo en el campo Nombre
if (strlen($_POST["nombre"]) == 0){
echo "<script type='text/javascript'>alert('El campo del nombre está vacío');</script>";
die();
}

// Validamos que se ha introducido un correo correcto
$pattern='/^[a-z]{2,}@[a-z]{2,}\.(com|es)$/';
if (preg_match($pattern, $_POST["email"]) === 0){
	echo "<script type='text/javascript'>alert('El email no es válido');</script>";
	die();
}

// Validamos que la contraseña es mayor que 6 caracteres
if ($_POST["pass1"] != $_POST["pass2"]){
	echo "<script type='text/javascript'>alert('Los dos campos de constraseñas deben ser iguales');</script>";
	die();
}

// Validamos que la contraseña es mayor que 6 caracteres
if (strlen($_POST["usuario"]) == 0){
	echo "<script type='text/javascript'>alert('El nombre de usuario no puede estar vacio');</script>";
	die();
}
$file = 'data/Usuarios.xml';
if(!file_exists($file)) // Si no existe el fichero XML
{
	$usuarios = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>
		<usuarios>
		</usuarios>');
}
else{
	$usuarios = simplexml_load_file($file); //Abrimos nuestro fichero xml
}
if(!$usuarios){
	echo 'Error: No se puede cargar el fichero Usuarios.xml';
		die();
}else{
	$i = 1;
	foreach ($usuarios->Usuario as $usuario){
		$i = $i + 1;
	}

	foreach($usuarios->Usuario as $usuario)
	{
		if ($_POST['email'] == $usuario['email']){
			echo "<script type='text/javascript'>
			alert('Ya existe un usuario con ese correo electronico.'); 
			window.location.assign('Registro.php');
			</script>";
			die();
	}
}
	$nuevoUsuario = $usuarios->addChild('Usuario');

	$nuevoUsuario->addAttribute('correo',$_POST['email']);	
	$nuevoUsuario->addChild('Nombre', $_POST['nombre']);
	$nuevoUsuario->addChild('NombreUsuario', $_POST['usuario']);
	$nuevoUsuario->addChild('password', $_POST['pass1']);
	$nuevoUsuario->addChild('TipoUsuario', $_POST['TipoDeUsuario']);

	$domxml = new DOMDocument('1.0');
	$domxml->preserveWhiteSpace = false;
	$domxml->formatOutput = true;
	$domxml->loadXML($usuarios->asXML());
	$domxml->save($file);
	echo "<script type='text/javascript'>
			alert('Se ha registrado correctamente! Es el usuario numero ".$i." enhorabuena!');
			window.location.assign('index.xhtml');
			</script>";
			die();
	}
?>