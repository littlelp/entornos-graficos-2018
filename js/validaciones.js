$(document).ready(function() {

$('#btnFormContacto').on('click', function() {
	validarContacto();
})

$('#btnFormNuevoProd').on('click', function() {
	validarNuevoProd();
})

$('#btnFormModificarProd').on('click', function() {
	validarModificarProd();
})

$('#btnFormNuevaCat').on('click', function() {
	validarNuevaCat();
})

$('#btnFormModificarCat').on('click', function() {
	validarModificarCat();
})

$('#btnFormNuevoUsuario').on('click', function() {
	validarNuevoUsuario();
})

$('#btnFormModificarUsuario').on('click', function() {
	validarModificarUsuario();
})

$('#btnFormNuevoCarousel').on('click', function() {
	validarNuevoCarousel();
})

$('#btnFormNuevaNovedad').on('click', function() {
	validarNuevaNovedad();
})

$('#btnFormModificarNovedad').on('click', function() {
	validarModificarNovedad();
})

$('#botonlogin').on('click', function() {
	checkForm();
});

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
var usuarioPattern = "([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$";
//var clavePattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{6,20}/";
var clavePattern = "^[a-zA-Z0-9]{6,20}$";
var consultaPattern = "([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$";
var productoPattern = "^[a-z A-Z]{2,25}$";
var descripcionPattern = "([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$";
var precioPattern  = "^[0-9]+([,][0-9]+)?$";


function enableSubmit (idForm) {

	$('#btnFormLogin').prop("disabled",false);
}
 
function disableSubmit (idForm) {
	$('#btnFormLogin').prop("disabled",true);
}

function checkInput(idInput) {
	return $(idInput).val() != '' ? true : false;
}

function checkForm () {

	$('#btnFormLogin').prop("disabled",true);

	$('#formLogin').on("change keydown", function() {

		if (checkInput("#user") && checkInput("#pass")) {

			enableSubmit();

		} else {

			disableSubmit();
		}
	});
}


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


function validarNuevoProd() {

	var form = $('#formNuevoProd');
	
	var inputProducto = $('input[name=Nombre]');
	var selCategoria = $('#selCat');
	var inputDescripcion = $('#descripcion');
	var inputPrecio1 = $('input[name=Precio1]');
	var inputPrecioLista = $('input[name=PrecioLista]');
	var inputImagen = $('input[name=Imagen]');

	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputProducto).val().match(productoPattern)) {
		bandera=0;
		errores[errores.length] = "Nombre de Producto incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if($(selCategoria).val() == null) {
		bandera=0;
		errores[errores.length] = "Debe seleccionar una categoria";
	}

	if(!$(inputDescripcion).val().match(descripcionPattern)) {
		bandera=0;
		errores[errores.length] = "Descripcion incorrecta. Debe tener un maximo de 160 caracteres.";
	}

	// if(!$(inputPrecio1).val().match(precioPattern)) {
	// 	bandera=0;
	// 	errores[errores.length] = "Precio incorrecto. Revise el formato. Separador decimal ',' unicamente.";
	// }

	// if(!$(inputPrecioLista).val().match(precioPattern)) {
	// 	bandera=0;
	// 	errores[errores.length] = "Precio incorrecto. Revise formato. Separador decimal ',' unicamente.";
	// }


	if($(inputImagen).val() == '') {
		bandera=0;
		errores[errores.length] = "Debe subir una imagen del producto";
	}


	if (bandera == 0) {
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}


function validarModificarProd() {

	var form = $('#formModificarProd');
	
	var inputProducto = $('input[name=Nombre]');
	var selCategoria = $('#selCat');
	var inputDescripcion = $('#descripcion');
	var inputPrecio1 = $('input[name=Precio1]');
	var inputPrecioLista = $('input[name=PrecioLista]');
	var inputImagen = $('input[name=Imagen]');

	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputProducto).val().match(productoPattern)) {
		bandera=0;
		errores[errores.length] = "Nombre de Producto incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if($(selCategoria).val() == null) {
		bandera=0;
		errores[errores.length] = "Debe seleccionar una categoria";
	}

	if(!$(inputDescripcion).val().match(descripcionPattern)) {
		bandera=0;
		errores[errores.length] = "Descripcion incorrecta. Debe tener un maximo de 160 caracteres.";
	}

	if(!$(inputPrecio1).val().match(precioPattern)) {
		bandera=0;
		errores[errores.length] = "Precio incorrecto. Revise el formato. Separador decimal ',' unicamente.";
	}

	if(!$(inputPrecioLista).val().match(precioPattern)) {
		bandera=0;
		errores[errores.length] = "Precio incorrecto. Revise formato. Separador decimal ',' unicamente.";
	}


	if($(inputImagen).val() == '') {
		bandera=0;
		errores[errores.length] = "Debe subir una imagen del producto";
	}


	if (bandera == 0) {
		mostrarErrores(form,errores);
	} else {
		form.submit();
	}

}


function validarNuevaCat() {

	var form = $('#formNuevaCat');
	
	var inputCategoria = $('input[name=Nombre]');
	var inputDescripcion = $('input[name=Descripcion]');
	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputCategoria).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Nombre de Categoria incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}


	if(!$(inputDescripcion).val().match(descripcionPattern)) {
		bandera=0;
		errores[errores.length] = "Descripcion incorrecta. Debe tener un maximo de 30 caracteres y no puede estar vacia.";
	}


	if (bandera == 0) {
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}

function validarModificarCat() {

	var form = $('#formModificarCat');
	
	var inputCategoria = $('input[name=Nombre]');
	var inputDescripcion = $('input[name=Descripcion]');
	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputCategoria).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Nombre de Categoria incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}


	if(!$(inputDescripcion).val().match(descripcionPattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Descripcion incorrecta. Debe tener un maximo de 30 caracteres y no puede estar vacia.";
	}


	if (bandera == 0) {
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}

function validarNuevoUsuario() {

	var form = $('#formNuevoUsuario');
	
	var inputNombre = $('input[name=Nombre]');
	var inputApellido = $('input[name=Apellido]');
	var selTipoUsu = $('#selTipoUsu');
	var inputEmail = $('input[name=Email]');
	var inputUsuario = $('input[name=usuario]');
	var inputClave = $('input[name=contrasena]');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	if(!$(inputNombre).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if(!$(inputApellido).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if($(selTipoUsu).val() == null) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Debe seleccionar un Tipo de Usuario";
	}

	if(!$(inputEmail).val().match(emailPattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Email incorrecto. Revise el formato";
	}


	if(!$(inputUsuario).val().match(usuarioPattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Usuario incorrecto. No puede estar vacio y debe tener un maximo de 15 caracteres";
	}

	if(!$(inputClave).val().match(clavePattern) || $(inputClave).length() < 6) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Contraseña incorrecta: Mínimo 6 caracteres y máximo 20. Solo letras y números.";
	 }



	if(bandera==0) {
		mostrarErrores(form,errores);
	} else {
		form.submit();
	}
}


function validarModificarUsuario() {

	var form = $('#formModificarUsuario');
	
	var inputNombre = $('input[name=Nombre]');
	var inputApellido = $('input[name=Apellido]');
	var selTipoUsu = $('#selTipoUsu');
	var inputEmail = $('input[name=Email]');
	var inputUsuario = $('input[name=usuario]');
	var inputClave = $('input[name=contrasena]');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	if(!$(inputNombre).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if(!$(inputApellido).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if($(selTipoUsu).val() == null) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Debe seleccionar un Tipo de Usuario";
	}

	if(!$(inputEmail).val().match(emailPattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Email incorrecto. Revise el formato";
	}


	if(!$(inputUsuario).val().match(usuarioPattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Usuario incorrecto. No puede estar vacio y debe tener un maximo de 15 caracteres";
	}



	if(bandera==0) {
		mostrarErrores(form,errores);
	} else {
		form.submit();
	}
}


function validarNuevoCarousel() {

	var form = $('#formNuevoCarousel');
	
	var inputNombre = $('input[name=Nombre]');
	var inputImagen = $('input[name=Imagen]');


	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputNombre).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Nombre de Carousel incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}


	if($(inputImagen).val() == '') {
		bandera=0;
		errores[errores.length] = "Debe subir una imagen del Carousel";
	}


	if (bandera == 0) {
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}


function validarNuevaNovedad() {


	var form = $('#formNuevaNovedad');
	
	var inputTitulo = $('input[name=titulo]');
	var inputDescripcion = $('#parrafo1');
	var inputImagen = $('input[name=imagen]');


	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputTitulo).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Titulo de Novedad incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	if(!$(inputDescripcion).val().match(descripcionPattern)) {
			bandera=0;
			errores[errores.length] = "Descripcion incorrecta. Debe tener un maximo de 160 caracteres y no puede estar vacia.";
		}

	if($(inputImagen).val() == '') {
		bandera=0;
		errores[errores.length] = "Debe subir una imagen de la Novedad";
	}

	if (bandera == 0) {
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}


function validarModificarNovedad() {

	var form = $('#formModificarNovedad');
	
	var inputTitulo = $('input[name=Titulo]');
	var inputDescripcion = $('#Parrafo1');
	var inputImagen = $('input[name=Imagen]');


	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputTitulo).val().match(namePattern)) {
		alert('jeje');
		bandera=0;
		errores[errores.length] = "Titulo de Novedad incorrecto. Debe tener una longitud entre 2 y 30 caracteres.";
	}

	// if(!$(inputDescripcion).val().match(descripcionPattern)) {
	// 		event.preventDefault();
	// 		bandera=0;
	// 		errores[errores.length] = "Descripcion incorrecta. Debe tener un maximo de 160 caracteres y no puede estar vacia.";
	// 	}

	// if($(inputImagen).val() == '') {
	// 	bandera=0;
	// 	errores[errores.length] = "Debe subir una imagen de la Novedad";
	// }


	if (bandera == 0) {
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}
});

	