function validacion(){
	
    var email = document.getElementById("inputEmail").value;
	var pass = document.getElementById("inputClave").value;
	
	/* Campo Email vacio */
	if(email == ""){
		alert('Debe ingresar un Email');
		document.getElementById("inputEmail").style.border = "2px solid red";
		return false;
	}
	
	/* Campo Clave vacio */
	if(pass == ""){
		alert('Debe ingresar su clave');
		document.getElementById("inputClave").style.border = "2px solid red";
		return false;
	}

	/* Campo Clave alfanumerico */
	var alfanum = /[A-z0-9]/; 
	
	for(var i = 0; i < pass.length; i++){
		var x = pass.charAt(i);
		if(!alfanum.test(x)){			
			document.getElementById("inputClave").style.border="2px solid red";
			alert('La clave debe contener numeros y letras');
			return false;
		}
	}
	
	/* Campo Clave minimo 6 caracteres */
	if (pass.length < 6){
		document.getElementById("inputClave").style.border="2px solid red";
		alert('La clave debe conterer al menos 6 caracteres mínimo');
		return false;
	}
	
	/* Campo Email y Clave diferentes */
	
	if (email == pass){
		document.getElementById("inputClave").style.border="2px solid red";
		alert('La clave no puede ser igual al E-mail');
		return false;
	}
	
        document.forms['frmBotones'].action = "Configuracion.php";
	
}