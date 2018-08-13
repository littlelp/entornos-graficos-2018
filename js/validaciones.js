$(document).ready(function() {
	var namePattern = "^[a-z A-Z]{2,30}$";
	var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
	var telPattern = "^[0-9]{7,10}";


	function checkInput(idInput, pattern) {
		return $(idInput).val().match(pattern) ? true : false;
	}

	function enableSubmit() {
		$('#btnFormContacto').prop("disabled",false);
	}
		 
	function disableSubmit() {
			$('#btnFormContacto').prop("disabled", true);
	}

	function checkTextarea(idText) {
		return $(idText).val().length > 8 ? true : false;	
	}

	function checkForm (idForm) {
		$(idForm).on("change keydown", function() {
			if (checkInput("#nombre", namePattern) && checkInput("#apellido", namePattern) && checkInput("#email", emailPattern) && checkInput("#tel", telPattern) && checkInput("#ciudad",namePattern) && checkInput("#provincia", namePattern) && checkTextarea("#consulta")) {
				enableSubmit();
			} else {
				disableSubmit();
			}
		});
	}

	$(function() {
		checkForm("#formularioContacto");
	});
});