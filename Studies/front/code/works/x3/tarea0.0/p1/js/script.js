createForm();

const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const data = Object.fromEntries(formData);
  console.log("El data es " + data);
  console.log("El data.username es " + data.username);
  console.log("El data.password es " + data.password);
  loginCookie(data.username, data.password);

});
function createForm() {

  const h1 = document.createElement('h1');
  h1.textContent = 'Login';
  document.body.appendChild(h1);

  const form = document.createElement('form');

  const labelName = document.createElement('label');
  labelName.setAttribute('for', 'username');
  labelName.textContent = 'Username:';
  form.appendChild(labelName);

  const inputName = document.createElement('input');
  inputName.setAttribute('type', 'text');
  inputName.setAttribute('name', 'username');
  labelName.appendChild(inputName);

  const br = document.createElement('br');
  form.appendChild(br);

  const labelPass = document.createElement('label');
  labelPass.setAttribute('for', 'password');
  labelPass.textContent = 'PassWord:';
  form.appendChild(labelPass);

  const inputPass = document.createElement('input');
  inputPass.setAttribute('type', 'password');
  inputPass.setAttribute('name', 'password');
  labelPass.appendChild(inputPass);

  const br2 = document.createElement('br');
  form.appendChild(br2);

  const labelButton = document.createElement('label');
  labelButton.setAttribute('for', 'button');
  form.appendChild(labelButton);

  const button = document.createElement('input');
  button.setAttribute('type', 'submit');
  button.setAttribute('name', 'Login')
  button.setAttribute('value', 'Login');
  button.setAttribute('id', 'Login');
  labelButton.appendChild(button);

  document.body.appendChild(form);

}

function openWindow() {

  const ventana = window.open("","","width=500,height=500,top=250px,left=250px, toolbar=yes, menubar=yes, scrollbars=yes, resizable=yes, location=yes, status=no");


  ventana.document.write("<html><head><title>Ventana</title></head><body><h1>Ha iniciado sesión</h1><ul><li>User: admin</li><li>Password: admin</li></ul><button id='btnCerrar'>Cerrar</button>");

  ventana.document.getElementById("btnCerrar").addEventListener('click', function () {
    closeWindow(ventana);
  });

  ventana.document.write("<form><label>Nombre: <input type='text' name='nombreCookie' id='nombreCookie'></label><label>Valor: <input type='text' name='valorCookie' id='valorCookie'></label><button id='btnCrearCookie'>Crear Cookie</button></form>");



  ventana.document.getElementById("btnCrearCookie").addEventListener('click', function () {
    const nombre = ventana.document.getElementById("nombreCookie").value;
    const valor = ventana.document.getElementById("valorCookie").value;

    createCookie(`${nombre}`, valor, 1);
    closeWindow(ventana);
  })


  ventana.document.write("<form><label>Nombre: <input type='text' name='nombreDelete' id='nombreDelete'></label><button id='btnDeleteCookie'>Delete Cookie</button></form></body></html>");

  ventana.document.getElementById("btnDeleteCookie").addEventListener('click', function () {
    const nombre = ventana.document.getElementById("nombreDelete").value;
    deleteCookie(`${nombre}`);
    closeWindow(ventana);
  });

}

function closeWindow(ventana) {
  ventana.close();
}

function createCookie(name, value, days) {

  const date = new Date();

  date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));

  const expire = "expires=" + date.toUTCString();

  document.cookie = name + "=" + value + ";" + expire;

}

function deleteCookie(name) {
  document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
}

function loginCookie(nombre, password) {
  const cookies = document.cookie;
  const arrayCookies = cookies.split(';');
  arrayCookies.forEach(function (cookie) {
    const arrayCookie = cookie.split('=');
    console.log("El array es " + arrayCookie);
    console.log("El nombre es " + nombre);
    console.log("El password es " + password);
    console.log("El array(0) es " + arrayCookie[0]);
    console.log("El array(1) es " + arrayCookie[1]);
    console.log("El array(2) es " + arrayCookie[2]);
    console.log("El array(3) es " + arrayCookie[3]);
    console.log("El array(4) es " + arrayCookie[4]);
    if (arrayCookie[0] == nombre && arrayCookie[1] == password) {
      openWindow();
    } else {
      alert('Usuario o contraseña incorrectos');
    }

  });
}

function abriTodasVentanas(){
  const cookies = document.cookie;
  const arrayCookies = cookies.split(';');
  arrayCookies.forEach(cookie => {
    const arrayCookie = cookie.split('=');
    nuevaVentana(arrayCookie[0]);
  });
}