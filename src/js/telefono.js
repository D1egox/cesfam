function validarNumeros(input) {
    var regex = /[^0-9]/g;
    input.value = input.value.replace(regex, '');
    if (input.value.length > 9) {
        input.value = input.value.slice(0, 9);
      } else if (input.value.length < 9) {
        input.setCustomValidity("El número de teléfono debe tener 9 dígitos");
      } else {
        input.setCustomValidity("");
      }
  }