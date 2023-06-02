function validarLetras(input) {
    var regex = /[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g;
    input.value = input.value.replace(regex, '');
  }