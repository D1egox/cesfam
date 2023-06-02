var divisionOriginal = document.getElementById('campos-dinamicos');
var container = document.getElementById('container');

function agregarFila() {
  var clonedDiv = document.createElement('div');
  clonedDiv.innerHTML = divisionOriginal.innerHTML;
  container.appendChild(clonedDiv);
};
