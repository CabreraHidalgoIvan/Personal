function muestra() {
  let element = document.getElementById('adicional');
  element.className = 'visible';  // Defined in css, change the stylesheet to visible

  let link = document.getElementById('enlace');
  link.className = 'oculto';      // Defined in css, change the stylesheet to oculto
}

window.addEventListener('click', muestra);  // Indicate the action 