function agregarFila() {
  var divCamposDinamicos = document.getElementById("campos-dinamicos");
  var filasExistentes = divCamposDinamicos.getElementsByClassName("row");
  var ultimaFilaExistente = filasExistentes[filasExistentes.length - 1];

  var nuevaFila = document.createElement("div");
  nuevaFila.className = "row";

  var columna1 = document.createElement("div");
  columna1.className = "col-6";

  var selectMedicamento = document.createElement("select");
  selectMedicamento.name = "medicamento";
  selectMedicamento.className = "form-control mb-5";
  selectMedicamento.required = true;

  data.forEach(medicamento => {
    var option = document.createElement("option");
    option.value = medicamento;
    option.text = medicamento;
    selectMedicamento.appendChild(option);
  });

  // Aquí puedes agregar las opciones al selectMedicamento
  // utilizando el código existente

  columna1.appendChild(selectMedicamento);
  nuevaFila.appendChild(columna1);

  var columna2 = document.createElement("div");
  columna2.className = "col-3";

  var inputCantidad = document.createElement("input");
  inputCantidad.type = "number";
  inputCantidad.name = "cantidad";
  inputCantidad.className = "form-control mb-5";
  inputCantidad.placeholder = "Cantidad";
  inputCantidad.required = true;

  columna2.appendChild(inputCantidad);
  nuevaFila.appendChild(columna2);

  divCamposDinamicos.insertBefore(nuevaFila, ultimaFilaExistente.nextSibling);
}

