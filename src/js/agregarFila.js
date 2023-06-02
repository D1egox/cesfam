var divisionOriginal = document.getElementById('campos-dinamicos');
var container = document.getElementById('container');

function agregarFila() {
  var clonedDiv = divisionOriginal.cloneNode(true);
  container.appendChild(clonedDiv);
};
