<?php
	session_start();
	if(isset($_SESSION['tipo'])){
	session_destroy(); // Eliminamos la sesion
	echo "<script type='text/javascript'>
		alert('Se ha deslogueado correctamente!'); 
		window.location.href='index.xhtml';
		</script>";
		}else{
	echo "<p> No puede hacer Logout sin haber hecho Login</p>";
	echo '<p> Haz <a href="Login.php">click aqui </a> para hacer login</p>';
		}	
?>
