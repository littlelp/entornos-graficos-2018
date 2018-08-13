<!DOCTYPE html>
<html>
	<head>
        <script>
			$(document).ready(function() {
				var namePattern = "^[a-z A-Z]{2,30}$";
				var emailPattern = "^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$";
 
				function checkInput(idInput, pattern) {
					return $(idInput).val().match(pattern) ? true : false;
				}

				function enableSubmit (idForm) {
					$(idForm + " button.submit").removeAttr("disabled");
				}
					 
					function disableSubmit (idForm) {
					$(idForm + " button.submit").attr("disabled", "disabled");
				}

				function checkForm (idForm) {
					$(idForm + " *").on("change keydown", function() {
						if (checkInput("#nombre", namePattern) && checkInput("#apellido", namePattern) && checkInput("#email", emailPattern)&& checkTextarea("#consulta")) {
							enableSubmit(idForm);
						} else {
							disableSubmit(idForm);
						}
					});
				}

				$(function() {
					checkForm("#formularioContacto");
				});
			});
		</script>
	</head>
	<body>
	</body>
</html>