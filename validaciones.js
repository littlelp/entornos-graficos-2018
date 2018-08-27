$(document).ready(function() {

$('#btnFormContacto').on('click', function() {
	validarContacto();
});

$('#btnFormNuevoProd').on('click', function() {
	validarNuevoProd();
});

$('#btnFormModificarProd').on('click', function() {
	validarModificarProd();
});

$('#btnFormNuevaCat').on('click', function() {
	validarNuevaCat();
});

$('#btnFormModificarCat').on('click', function() {
	validarModificarCat();
});

$('#btnFormNuevoUsu').on('click', function() {
	validarNuevoUsu();
});

$('#btnFormModificarUsuario').on('click', function() {
	validarModificarUsuario();
});

$('#btnFormNuevoCarousel').on('click', function() {
	validarNuevoCarousel();
});

$('#btnFormNuevaNovedad').on('click', function() {
	validarNuevaNovedad();
});

$('#btnFormModificarNovedad').on('click', function() {
	validarModificarNovedad();
});

$('#botonlogin').on('click', function() {
	checkFormLogin();
});

$('#btnFormRegistrarse').on('click', function() {
	checkFormRegistro();
});

$('#btnModificarPerfil').on('click', function() {
	validarModificarPerfil();
});

// $('#modal-comprar').on('show', function() {
// 	validarCompra();
// })
// $('#botonComprar').on('click', function() {
// 	validarCompra();
// });

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

var namePattern = "^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,30}$";
var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
var telPattern = "^[0-9]{7,10}";
var usuarioPattern = "([a-zA-Z0-9]*(_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$";
//var clavePattern = "/^[a-zA-Z0-9]{6,20}$/g";
var clavePattern = "[a-zA-Z0-9]{6,20}$";
var consultaPattern = "([a-zA-Z0-9]*(_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$";
var productoPattern ="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{2,25}";
//var productoPattern = "^[a-z A-Z]{2,25}$";
var descripcionPattern = "/^[a-zA-Z0-9]{4,160}$/g";
var precioPattern  = "^[0-9]{1,4}";
var stockPattern  = "^[0-9]{1,10}";


function enableSubmit (btnForm) {

	$(btnForm).prop("disabled",false);
}
 
function disableSubmit (btnForm) {
	$(btnForm).prop("disabled",true);
}

function checkInput(idInput) {
	return $(idInput).val() != '' ? true : false;
}

function checkPattern(idInput) {

	return $(idInput).val().match(emailPattern) ? true : false;
		
}

function checkFormLogin () {

	var btnForm = $('#btnFormLogin');

	$('#btnFormLogin').prop("disabled",true);

	$('#formLogin').on("change keydown", function() {

		if (checkInput("#user") && checkInput("#pass")) {

			enableSubmit(btnForm);

		} else {

			disableSubmit(btnForm);
		}
	});
}


function validarCompra() {

	var btnForm = $('#btnFormComprar');


	$('#btnFormComprar').prop("disabled",true);

	$('#formComprar').on("change keydown", function() {

		if (checkInput("#direccion")) {

			enableSubmit(btnForm);

		} else {

			disableSubmit(btnForm);
		}
	});

}

function checkFormRegistro() {

	var form = $('#formRegistrarse');

	var inputNombre = $('input[name=Nombre]');
	var inputApellido = $('input[name=Apellido]');
	var inputEmail = $('input[name=Email]');
	var inputUsuario = $('input[name=usuario]');
	var inputClave = $('input[name=contrasena]');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	if(!$(inputNombre).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres. Solo letras y espacios";
	}

	if(!$(inputApellido).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres. Solo letras y espacios";
	}

	if(!$(inputEmail).val().match(emailPattern)) {
		bandera=0;
		errores[errores.length] = "Email incorrecto. Revise el formato";
	}

	if(!$(inputUsuario).val().match(usuarioPattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Usuario incorrecto. No puede estar vacio y debe tener un maximo de 15 caracteres.";
	}

	if(!$(inputClave).val().match(clavePattern)){
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


function validarModificarPerfil() {

	var form = $('#formModificarPerfil');
	var inputNombre = $('#Nombre');
	var inputApellido = $('#Apellido');
	var inputEmail = $('#Email');
	var inputUsuario = $('#usuario');
	var inputClave = $('#contrasena');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputNombre).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres. Solo letras y espacios";
	}

		
	if(!$(inputApellido).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres. Solo letras y espacios";
	}

	if(!$(inputEmail).val().match(emailPattern)) {
		bandera=0;
		errores[errores.length] = "Email incorrecto. Revise el formato";
	}

	if(!$(inputUsuario).val().match(usuarioPattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Usuario incorrecto. No puede estar vacio y debe tener un maximo de 15 caracteres.";
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


function validarContacto() {

	var form = $('#formContacto');
	
	var inputNombre = $('#Nombre');
	var inputApellido = $('#Apellido');
	var inputCiudad = $('#Ciudad');
	var inputProvincia = $('#Provincia');
	var inputEmail = $('#Email');
	var inputTelefono = $('#Tel');
	var inputConsulta = $('#Consulta');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	if(!$(inputNombre).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if(!$(inputApellido).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if(!$(inputEmail).val().match(emailPattern)) {
		bandera=0;
		errores[errores.length] = "Email incorrecto. Revise el formato";
	}

	if(!$(inputCiudad).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Ciudad incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}


	if(!$(inputProvincia).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Provincia incorrecta. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if(!$(inputTelefono).val().match(telPattern)) {
		bandera=0;
		errores[errores.length] = "Telefono incorrecto. Debe contener solo números, entre 7 y 10 dígitos.";
	}

	if(!$(inputConsulta).val().length > 0) {
		bandera=0;
		errores[errores.length] = "Consulta incorrecta. Debe tener un máximo de 160 caracteres y no puede estar vacía.";
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
	
	var inputProducto = $('#txtProducto');
	var selCategoria = $('#selCat');
	var inputDescripcion = $('#descripcion');
	var inputPrecio1 = $('#Precio1');
	var inputPrecioLista = $('#PrecioLista');
	var inputStock = $('#Stock');
	var inputImagen = $('input[name=Imagen]');

	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	// if(!$(inputProducto).val().length > 0) {
	// 	bandera=0;
	// 	errores[errores.length] = "Nombre de Producto incorrecto. Debe tener una longitud entre 2 y 25 caracteres.";
	// }


	if(!$(inputProducto).val().match(productoPattern)) {
		bandera=0;
		errores[errores.length] = "Nombre de Producto incorrecto. Debe tener una longitud entre 2 y 25 caracteres.";
	}

	if($(selCategoria).val() == null) {
		bandera=0;
		errores[errores.length] = "Debe seleccionar una categoria";
	}

	if (!$(inputDescripcion).val().length > 0) {
		bandera=0;
		errores[errores.length] = "Descripción incorrecta. Debe tener un máximo de 160 caracteres y no puede estar vacía.";
	}

	if(!$(inputPrecio1).val().match(precioPattern)) {
		bandera=0;
		errores[errores.length] = "Precio incorrecto.Se admiten hasta 4 digitos. Revise el formato.";
	}

	if(!$(inputPrecioLista).val().match(precioPattern)) {
		bandera=0;
		errores[errores.length] = "Precio incorrecto. Se admiten hasta 4 digitos. Revise formato.";
	}

	if(!$(inputStock).val().match(stockPattern)) {
		bandera=0;
		errores[errores.length] = "Stock incorrecto. Se admiten hasta 10 digitos. Revise formato.";
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


function validarModificarProd() {

	var form = $('#formModificarProd');
	
	var inputProducto = $('#txtProducto');
	var selCategoria = $('#Cat');
	var inputDescripcion = $('#descripcion');
	var inputPrecio1 = $('#Precio1');
	var inputPrecioLista = $('#PrecioLista');
	var inputStock = $('#Stock');
	var inputImagen = $('#txtImagen');

	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	// inputProducto.on('Input', function() {

		if(!$(inputProducto).val().match(productoPattern)) {
			event.preventDefault();
			bandera=0;
			errores[errores.length] = "Nombre de Producto incorrecto. Debe tener una longitud entre 2 y 25 caracteres.";
		}

	// });

	// selCategoria.on('click', function() {
		if($(selCategoria).val() == null) {
			event.preventDefault();
			bandera=0;
			errores[errores.length] = "Debe seleccionar una categoria";
		}
	// })
	

	// inputDescripcion.on('Input', function() {

		if(!$(inputDescripcion).val().length > 0) {
			event.preventDefault();
			bandera=0;
			errores[errores.length] = "Descripción incorrecta. Debe tener un máximo de 160 caracteres y no puede estar vacía.";
		}

		if(!$(inputStock).val().match(stockPattern)) {
			event.preventDefault();
			bandera=0;
			errores[errores.length] = "Stock incorrecto. Se admiten hasta 10 digitos. Revise formato.";
		}
	// });

	// inputPrecio1.on('Input', function() {

		if(!$(inputPrecio1).val().match(precioPattern)) {
			event.preventDefault();
			bandera=0;
			errores[errores.length] = "Precio incorrecto. Se admiten hasta 4 digitos. Revise el formato.";
		}
	// });

	// inputPrecioLista.on('Input', function() {

		if(!$(inputPrecioLista).val().match(precioPattern)) {
			event.preventDefault();
			bandera=0;
			errores[errores.length] = "Precio incorrecto. Se admiten hasta 4 digitos. Revise formato.";
		}
	// });

	if (bandera == 0) {
		mostrarErrores(form,errores);
	} else {
		form.submit();
	}

}


function validarNuevaCat() {

	var form = $('#formNuevaCat');
	
	var inputCategoria = $('#Nombre');
	var inputDescripcion = $('#Descripcion');
	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputCategoria).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Nombre de Categoria incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}


	if (!$(inputDescripcion).val().length > 0) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Descripción incorrecta. Debe tener un máximo de 50 caracteres y no puede estar vacía.";
	}


	if (bandera == 0) {
		
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}

function validarModificarCat() {

	var form = $('#formModificarCat');
	
	var inputCategoria = $('#Nombre');
	var inputDescripcion = $('#Descripcion');
	

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	if(!$(inputCategoria).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Nombre de Categoria incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}


	if (!$(inputDescripcion).val().length > 0) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Descripción incorrecta. Debe tener un máximo de 160 caracteres y no puede estar vacía.";
		
	}

	
	if (bandera == 0) {
		
		mostrarErrores(form,errores);

	} else {

		form.submit();
	}

}

function validarNuevoUsu() {

	var form = $('#formNuevoUsu');
	
	var inputNombre = $('#Nombre');
	var inputApellido = $('#Apellido');
	var selTipoUsu = $('#selTipoUsu');
	var inputEmail = $('#Email');
	var inputUsuario = $('#Usuario');
	var inputClave = $('#Contrasena');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputNombre).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if(!$(inputApellido).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if($(selTipoUsu).val() == null) {
		bandera=0;
		errores[errores.length] = "Debe seleccionar un Tipo de Usuario.";
	}

	if(!$(inputEmail).val().match(emailPattern)) {
		bandera=0;
		errores[errores.length] = "Email incorrecto. Revise el formato.";
	}


	if(!$(inputUsuario).val().match(usuarioPattern)) {
		bandera=0;
		errores[errores.length] = "Usuario incorrecto. No puede estar vacio y debe tener un maximo de 15 caracteres.";
	}

	if(!$(inputClave).val().match(clavePattern) || $(inputClave).val().length < 6) {
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
	
	var inputNombre = $('#txtNombre');
	var inputApellido = $('#txtApellido');
	var selTipoUsu = $('#selTipoUsu');
	var inputEmail = $('#txtEmail');
	var inputUsuario = $('#txtUsuario');

	var bandera = 1 ;

	borrarErrores();

	var errores=[];

	if(!$(inputNombre).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Nombre incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if(!$(inputApellido).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Apellido incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
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

	if(!$(inputUsuario).val().match(usuarioPattern) || $(inputUsuario).val().length <1 ) {
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
	
	var inputNombre = $('#Nombre');
	var inputImagen = $('input[name=Imagen]');


	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputNombre).val().match(namePattern)) {
		bandera=0;
		errores[errores.length] = "Nombre de Carousel incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
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
	
	var inputTitulo = $('#titulo');
	var inputDescripcion = $('#parrafo1');
	var inputImagen = $('input[name=imagen]');


	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputTitulo).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Titulo de Novedad incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if (!$(inputDescripcion).val().length > 0) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Descripción incorrecta. Debe tener un maximo de 160 caracteres y no puede estar vacía.";
	}

	if($(inputImagen).val() == '') {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Debe subir una imagen de la Novedad.";
	}

	if (bandera == 0) {
		mostrarErrores(form,errores);

	} else {
		form.submit();
	}

}


function validarModificarNovedad() {

	var form = $('#formModificarNovedad');
	
	var inputTitulo = $('#Titulo');
	var inputDescripcion = $('#Parrafo1');
	var inputImagen = $('input[name=Imagen]');


	var bandera = 1 ;

	borrarErrores();

	var errores=[];


	if(!$(inputTitulo).val().match(namePattern)) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Titulo de Novedad incorrecto. Debe tener una longitud entre 2 y 30 caracteres. No se admiten números";
	}

	if (!$(inputDescripcion).val().length > 0) {
		event.preventDefault();
		bandera=0;
		errores[errores.length] = "Descripción incorrecta. Debe tener un maximo de 160 caracteres y no puede estar vacía.";
	}


	if (bandera == 0) {
		mostrarErrores(form,errores);
	} else {
		form.submit();
	}

}
});

	