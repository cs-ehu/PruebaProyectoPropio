function validarForm(form){
	var nombre = form.nombre.value;
	var usuario = form.usuario.value;
	var email = form.email.value;
	var pass1 = form.pass1.value;
	var pass2 = form.pass2.value;
	var error = '';

	if(nombre == ''){
		error += 'Introducir el nombre es obligatorio\n';
	}
	if(usuario == ''){
		error += 'Introducir un usuario es obligatorio\n';
	}
	if(pass1 != pass2){
		error += 'Las contraseñas deben ser las mismas\n';
	}
	if(!VerificarFormatoCorreo(email)){
		error += 'Email no valido';
	}
	if(error != ''){
		alert(error);
		return false;
	}else{
		return true;
	}
}
function VerificarFormatoCorreo(direccion)
{
	// Asegurar que '@' aparece una única vez
	if(direccion.split("@").length != 2)
		return false;
	// Asegurar que '@' no es el primer caracter
	if(direccion.indexOf("@") == 0)
		return false;
	// Asegurar que después de '@' hay, al menos, un punto
	if(direccion.lastIndexOf(".") < direccion.lastIndexOf("@"))
		return false;
	// Asegurar que después del último punto hay, al menos, dos caracteres
	if(direccion.lastIndexOf(".") + 2 > direccion.length - 1)
		return false;
	return true;
}