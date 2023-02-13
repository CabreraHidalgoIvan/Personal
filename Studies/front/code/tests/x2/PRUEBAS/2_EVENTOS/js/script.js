window.onload = function() {
    window.onkeyup = muestraInformacion;
    window.onkeypress = muestraInformacion;
    window.onkeydown = muestraInformacion;
  }
  
  function muestraInformacion(elEvento) {
    var evento = window.event || elEvento;
  
    var mensaje = "Tipo de evento: " + evento.type + "<br>" +
                  "Propiedad keyCode: " + evento.keyCode + "<br>" +
                  "Propiedad charCode: " + evento.charCode + "<br>" +
                  "Carácter pulsado: " + String.fromCharCode(evento.charCode);
  
    info.innerHTML += "<br>--------------------------------------<br>" + mensaje
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  