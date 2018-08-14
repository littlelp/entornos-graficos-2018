$(document).ready(function() {

	var namePattern = "^[a-z A-Z]{2,30}$";
	var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
	var telPattern = "^[0-9]{7,10}";
	var usuarioPattern = "/^[a-zA-Z0-9]+([a-zA-Z0-9](_|-| )[a-zA-Z0-9])*[a-zA-Z0-9]+$/";
	var clavePattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{6,20}$";

	function checkInput(idInput, pattern) {
		return $(idInput).val().match(pattern) ? true : false;
	}

	function enableSubmit(idBtn) {
		$(idBtn).prop("disabled",false);
	}
		 
	function disableSubmit(idBtn) {
		$(idBtn).prop("disabled", true);
	}

	function checkTextarea(idText) {
		return $(idText).val().length > 8 ? true : false;	
	}

	function checkFormContacto(idForm) {
		$(idForm).on("change keydown", function() {

			if (checkInput("#nombre", namePattern) && checkInput("#apellido", namePattern) && checkInput("#email", emailPattern) && checkInput("#tel", telPattern) && checkInput("#ciudad",namePattern) && checkInput("#provincia", namePattern) && checkTextarea("#consulta")) {
				enableSubmit('#btnFormContacto');
			} else {
				disableSubmit('#btnFormContacto');
			}
		});
	}

	function checkFormLogin (idForm) {
		disableSubmit('#btnFormLogin');
		$(idForm).on("click change keydown", function() {

			if (checkInput("#user", usuarioPattern) && checkInput("#pass", clavePattern)) {
				enableSubmit('#btnFormLogin');
			} else {
				disableSubmit('#btnFormLogin');
			}
		});
	}

	$(function() {
		checkFormContacto("#formContacto");
		checkFormLogin("#formLogin");
		
	});

});

	