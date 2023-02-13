document.addEventListener('DOMContentLoaded', function() {
document.onkeyup = muestraInformacion;
document.onkeypress = muestraInformacion;
document.onkeydown = muestraInformacion;
  });
  
  function muestraInformacion(elEvento) {
    let evento = window.event || elEvento;
  
    var mensaje = "Tipo de evento: " + evento.type + "<br>" +
                  "Propiedad key, nombre de la tecla: " + evento.key + "<br>" +
                  "Propiedad charCode: " + evento.charCode + "<br>" +
                  "Carácter pulsado: " + String.fromCharCode(evento.charCode);
  
    let div = document.querySelector('div');
    div.innerHTML += "<br>--------------------------------------<br>" + mensaje
  }