<?php
session_start();

$Nombreusuario=$_POST['usuario']; 
$pass=$_POST['pass'];
				
$usuarios = simplexml_load_file('data/Usuarios.xml'); 

foreach($usuarios->Usuario as $usuario){ 

	if ($usuario['correo'] == $Nombreusuario || $usuario->NombreUsuario == $Nombreusuario){	
		if($usuario->password == $pass){
			$_SESSION['correo'] = (String)$usuario['correo'];
			$_SESSION['password'] = $pass;
			$_SESSION['tipo'] = (String)$usuario->TipoUsuario;
			echo ("<script LANGUAGE='JavaScript'>
    		window.alert('Logueado correctamente!');
  		  window.location.href='index.xhtml';
   			 </script>");
		}
		}
	}
	echo "<script type='text/javascript'>
		alert('Error en el usuario o contraseña'); 
		window.location.href='Login.php';
		</script>";
		die();
?>