$(document).ready(function() {

$('#btnFormContacto').on('click', function() {
	validarContacto();
})


function borrarErrores() {
	$('div.alert-danger').remove();
}

function mostrarErrores(selector, errores) {
	var divError = document.createElement("div");
	$(divError).attr("class","");
	$(divError).addClass('alert alert-danger');
	$(divError).attr("role","alert");
	divError.id = "errores";
	//var ulError = document.createElement('ul');
	for (var i = 0; i < errores.length; i++) {
		//$(ulError).append("<li>"+errores[i]+"</li>");
		$(divError).append('<p>'+errores[i]+'</p>');
	}
	//$(divError).append(ulError);
	$(divError).append('<a href="#" class="close">&times;</a>');
	selector.after(divError);
}

var namePattern = "^[a-z A-Z]{2,30}$";
var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
var telPattern = "^[0-9]{7,10}";
var usuarioPattern = "/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/";
var clavePattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{6,20}$";
var consultaPattern = "^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$";

function validarContacto() {

	var form = $('#formContacto');
	
	var inputNombre = $('input[name=Nombre]');
	var inputApellido = $('input[name=Apellido]');
	var inputCiudad = $('input[name=Ciudad]');
	var inputProvincia = $('input[name=Provincia]');
	var inputEmail = $('input[name=Email]');
	var inputTelefono = $('input[name=Tel]');
	var inputConsulta = $('#consulta');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	if(!$(inputNombre).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if(!$(inputApellido).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if(!$(inputEmail).val().match(emailPattern)) {
		bandera=0;
		errores[errores.length] = "Email incorrecto. Revise el formato";
	}

	if(!$(inputCiudad).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Ciudad incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}


	if(!$(inputProvincia).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Provincia incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if(!$(inputTelefono).val().match(telPattern)) {
		bandera=0;
		errores[errores.length] = "Telefono incorrecto. Debe contener solo números, entre 7 y 10 dígitos.";
	}

	if(!$(inputConsulta).val().match(consultaPattern)) {
		bandera=0;
		errores[errores.length] = "Consulta incorrecta. Debe tener un maximo de 500 caracteres y no puede estar vacía.";
	 }



	if(bandera==0) {
		mostrarErrores(form,errores);
	} else {
		form.submit();
	}

	//<div class="alert alert-danger" role="alert">
}


});

// var namePattern = "^[a-z A-Z]{2,30}$";
// var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
// var telPattern = "^[0-9]{7,10}";
// var usuarioPattern = "/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/";
// var clavePattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{6,20}$";

// function checkInput(idInput, pattern) {
// 	return $(idInput).val().match(pattern) ? true : false;
// }

// function enableSubmit(idBtn) {
// 	$(idBtn).prop("disabled",false);
// }
	 
// function disableSubmit(idBtn) {
// 	$(idBtn).prop("disabled", true);
// }

// function checkTextarea(idText) {
// 	return $(idText).val().length > 8 ? true : false;	
// }

// function checkFormContacto(idForm) {
// 	$(idForm).on("change keydown", function() {

// 		if (checkInput("#nombre", namePattern) && checkInput("#apellido", namePattern) && checkInput("#email", emailPattern) && checkInput("#tel", telPattern) && checkInput("#ciudad",namePattern) && checkInput("#provincia", namePattern) && checkTextarea("#consulta")) {
// 			enableSubmit('#btnFormContacto');
// 		} else {
// 			disableSubmit('#btnFormContacto');
// 		}
// 	});
// }

// function checkFormLogin (idForm) {
// 	disableSubmit('#btnFormLogin');
// 	$(idForm).on("click change keydown", function() {

// 		if (checkInput("#user", usuarioPattern) && checkInput("#pass", clavePattern)) {
// 			enableSubmit('#btnFormLogin');
// 		} else {
// 			disableSubmit('#btnFormLogin');
// 		}
// 	});
// }

// $(function() {
// 	checkFormContacto("#formContacto");
// 	checkFormLogin("#formLogin");
	
// });

	