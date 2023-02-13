

createForm();

const form = document.querySelector('form');


const regExp = {
	wordsAndSpaces: /[\w\s]$/i,
	notSpaceEnd: /\w$/i,
	dni: /^\d{8}[a-zA-Z]$/i,
  email: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$/,
	licensePlate: /^[0-9]{4}[A-Z]{3}$/i,
	licensePlate2: /^[0-9]{4}-[A-Z]{3}$/i,
	postalCode: /^1+([1-9]{2})+[0-9]{2}$/i,
	postalCode2: /^1+([1-9])+([0-9]{2})+[1-9]$/i,
	postalCode3: /^1+0+([0-9]{2})+[1-9]$/i,
	mac: /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/i
}



function createForm() {

  const h1 = document.createElement('h1');
  h1.textContent = 'Login';
  document.body.appendChild(h1);

  const form = document.createElement('form');
  form.setAttribute('method', 'post');

  const labelName = document.createElement('label');
  labelName.setAttribute('for', 'email');
  labelName.textContent = 'email:';
  form.appendChild(labelName);

  const inputName = document.createElement('input');
  inputName.setAttribute('type', 'email');
  inputName.setAttribute('name', 'email');
  inputName.setAttribute('id', 'email');
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
  button.setAttribute('id', 'btn');
  labelButton.appendChild(button);

  document.body.appendChild(form);


  const email = document.getElementById('email');
  const btn = document.getElementById('btn');

  btn.addEventListener('click', (e) => {

    e.preventDefault();

    if (regExp.email.test(email.value)) {
      alert('Email correcto');
    } else {
      alert('Email incorrecto');
    }

  });
}