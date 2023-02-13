const form = document.querySelector('#form');
const input = document.querySelectorAll('#form input');

const regExp = {
	wordsAndSpaces: /[\w\s]$/i,
	notSpaceEnd: /\w$/i,
	dni: /^\d{8}[a-zA-Z]$/i,
	licensePlate: /^[0-9]{4}[A-Z]{3}$/i,
	licensePlate2: /^[0-9]{4}-[A-Z]{3}$/i,
	postalCode: /^1+([1-9]{2})+[0-9]{2}$/i,
	postalCode2: /^1+([1-9])+([0-9]{2})+[1-9]$/i,
	postalCode3: /^1+0+([0-9]{2})+[1-9]$/i,
	mac: /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/i
}

const validateForm = (e) => {
	switch (e.target.name) {
		case "capitalize":
			if (regExp.wordsAndSpaces.test(e.target.value)) {
				document.querySelector('#group_capitalize').classList.remove('form_group_incorrect');
				document.querySelector('#group_capitalize').classList.add('form_group_correct');
				document.querySelector('#group_capitalize em').classList.add('fa-check-circle');
				document.querySelector('#group_capitalize em').classList.remove('fa-times-circle');

				document.querySelector('#group_capitalize .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_capitalize .form_message_error').textContent = capitalize(e.target.value);

			} else {
				document.querySelector('#group_capitalize').classList.add('form_group_incorrect');
				document.querySelector('#group_capitalize').classList.remove('form_group_correct');
				document.querySelector('#group_capitalize em').classList.add('fa-times-circle');
				document.querySelector('#group_capitalize em').classList.remove('fa-check-circle');

				document.querySelector('#group_capitalize .form_message_error').classList.remove('form_error_message_active');
			}


			break;
		case "reverse":
			if (regExp.wordsAndSpaces.test(e.target.value)) {
				document.querySelector('#group_reverse').classList.remove('form_group_incorrect');
				document.querySelector('#group_reverse').classList.add('form_group_correct');
				document.querySelector('#group_reverse em').classList.add('fa-check-circle');
				document.querySelector('#group_reverse em').classList.remove('fa-times-circle');

				document.querySelector('#group_reverse .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_reverse .form_message_error').textContent = reverseCapitalized(e.target.value);

			} else {
				document.querySelector('#group_reverse').classList.add('form_group_incorrect');
				document.querySelector('#group_reverse').classList.remove('form_group_correct');
				document.querySelector('#group_reverse em').classList.add('fa-times-circle');
				document.querySelector('#group_reverse em').classList.remove('fa-check-circle');

				document.querySelector('#group_reverse .form_message_error').classList.remove('form_error_message_active');
			}
			break;
		case "camelCase":
			if (regExp.wordsAndSpaces.test(e.target.value)) {
				document.querySelector('#group_camelCase').classList.remove('form_group_incorrect');
				document.querySelector('#group_camelCase').classList.add('form_group_correct');
				document.querySelector('#group_camelCase em').classList.add('fa-check-circle');
				document.querySelector('#group_camelCase em').classList.remove('fa-times-circle');

				document.querySelector('#group_camelCase .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_camelCase .form_message_error').textContent = camelCase(e.target.value);

			} else {
				document.querySelector('#group_camelCase').classList.add('form_group_incorrect');
				document.querySelector('#group_camelCase').classList.remove('form_group_correct');
				document.querySelector('#group_camelCase em').classList.add('fa-times-circle');
				document.querySelector('#group_camelCase em').classList.remove('fa-check-circle');

				document.querySelector('#group_camelCase .form_message_error').classList.remove('form_error_message_active');
			}
			break;
		case "sinCamelCase":
			if (regExp.wordsAndSpaces.test(e.target.value)) {
				document.querySelector('#group_sinCamelCase').classList.remove('form_group_incorrect');
				document.querySelector('#group_sinCamelCase').classList.add('form_group_correct');
				document.querySelector('#group_sinCamelCase em').classList.add('fa-check-circle');
				document.querySelector('#group_sinCamelCase em').classList.remove('fa-times-circle');

				document.querySelector('#group_sinCamelCase .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_sinCamelCase .form_message_error').textContent = sinCamelCase(e.target.value);

			} else {
				document.querySelector('#group_sinCamelCase').classList.add('form_group_incorrect');
				document.querySelector('#group_sinCamelCase').classList.remove('form_group_correct');
				document.querySelector('#group_sinCamelCase em').classList.add('fa-times-circle');
				document.querySelector('#group_sinCamelCase em').classList.remove('fa-check-circle');

				document.querySelector('#group_sinCamelCase .form_message_error').classList.remove('form_error_message_active');
			}
			break;
		case "end":
			if (regExp.notSpaceEnd.test(e.target.value)) {
				document.querySelector('#group_end').classList.remove('form_group_incorrect');
				document.querySelector('#group_end').classList.add('form_group_correct');
				document.querySelector('#group_end em').classList.add('fa-check-circle');
				document.querySelector('#group_end em').classList.remove('fa-times-circle');

				document.querySelector('#group_end .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_end .form_message_error').textContent = endStr(e.target.value);

			} else {
				document.querySelector('#group_end').classList.add('form_group_incorrect');
				document.querySelector('#group_end').classList.remove('form_group_correct');
				document.querySelector('#group_end em').classList.add('fa-times-circle');
				document.querySelector('#group_end em').classList.remove('fa-check-circle');

				document.querySelector('#group_end .form_message_error').classList.remove('form_error_message_active');
			}
			break;
		case "start":
			if (regExp.notSpaceEnd.test(e.target.value)) {
				document.querySelector('#group_start').classList.remove('form_group_incorrect');
				document.querySelector('#group_start').classList.add('form_group_correct');
				document.querySelector('#group_start em').classList.add('fa-check-circle');
				document.querySelector('#group_start em').classList.remove('fa-times-circle');

				document.querySelector('#group_start .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_start .form_message_error').textContent = startStr(e.target.value);

			} else {
				document.querySelector('#group_start').classList.add('form_group_incorrect');
				document.querySelector('#group_start').classList.remove('form_group_correct');
				document.querySelector('#group_start em').classList.add('fa-times-circle');
				document.querySelector('#group_start em').classList.remove('fa-check-circle');

				document.querySelector('#group_end .form_message_error').classList.remove('form_error_message_active');
			}
			break;
		case "dni":
			if (regExp.dni.test(e.target.value)) {
				document.querySelector('#group_dni').classList.remove('form_group_incorrect');
				document.querySelector('#group_dni').classList.add('form_group_correct');
				document.querySelector('#group_dni em').classList.add('fa-check-circle');
				document.querySelector('#group_dni em').classList.remove('fa-times-circle');

				document.querySelector('#group_dni .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_dni .form_message_error').textContent = "DNI correcto";

			} else {
				document.querySelector('#group_dni').classList.add('form_group_incorrect');
				document.querySelector('#group_dni').classList.remove('form_group_correct');
				document.querySelector('#group_dni em').classList.add('fa-times-circle');
				document.querySelector('#group_dni em').classList.remove('fa-check-circle');

				document.querySelector('#group_dni .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_dni .form_message_error').textContent = "DNI incorrecto";
			}
			break;

		case "licensePlate":
			if (regExp.licensePlate.test(e.target.value) || regExp.licensePlate2.test(e.target.value)) {
				document.querySelector('#group_licensePlate').classList.remove('form_group_incorrect');
				document.querySelector('#group_licensePlate').classList.add('form_group_correct');
				document.querySelector('#group_licensePlate em').classList.add('fa-check-circle');
				document.querySelector('#group_licensePlate em').classList.remove('fa-times-circle');

				document.querySelector('#group_licensePlate .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_licensePlate .form_message_error').textContent = "Matrícula correcto";

			} else {
				document.querySelector('#group_licensePlate').classList.add('form_group_incorrect');
				document.querySelector('#group_licensePlate').classList.remove('form_group_correct');
				document.querySelector('#group_licensePlate em').classList.add('fa-times-circle');
				document.querySelector('#group_licensePlate em').classList.remove('fa-check-circle');

				document.querySelector('#group_licensePlate .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_licensePlate .form_message_error').textContent = "Matrícula incorrecto";
			}

			break;

			case "postalCode":
				if (regExp.postalCode.test(e.target.value) || regExp.postalCode2.test(e.target.value) || regExp.postalCode3.test(e.target.value)) {
					document.querySelector('#group_postalCode').classList.remove('form_group_incorrect');
					document.querySelector('#group_postalCode').classList.add('form_group_correct');
					document.querySelector('#group_postalCode em').classList.add('fa-check-circle');
					document.querySelector('#group_postalCode em').classList.remove('fa-times-circle');

					document.querySelector('#group_postalCode .form_message_error').classList.add('form_error_message_active');
					document.querySelector('#group_postalCode .form_message_error').textContent = "Postal Code correcto";

				} else {
					document.querySelector('#group_postalCode').classList.add('form_group_incorrect');
					document.querySelector('#group_postalCode').classList.remove('form_group_correct');
					document.querySelector('#group_postalCode em').classList.add('fa-times-circle');
					document.querySelector('#group_postalCode em').classList.remove('fa-check-circle');

					document.querySelector('#group_postalCode .form_message_error').classList.add('form_error_message_active');
					document.querySelector('#group_postalCode .form_message_error').textContent = "Postal Code incorrecto";
				}


				break;

		case "mac":
			if (regExp.mac.test(e.target.value)) {
				document.querySelector('#group_mac').classList.remove('form_group_incorrect');
				document.querySelector('#group_mac').classList.add('form_group_correct');
				document.querySelector('#group_mac em').classList.add('fa-check-circle');
				document.querySelector('#group_mac em').classList.remove('fa-times-circle');

				document.querySelector('#group_mac .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_mac .form_message_error').textContent = "MAC correcto";

			} else {
				document.querySelector('#group_mac').classList.add('form_group_incorrect');
				document.querySelector('#group_mac').classList.remove('form_group_correct');
				document.querySelector('#group_mac em').classList.add('fa-times-circle');
				document.querySelector('#group_mac em').classList.remove('fa-check-circle');

				document.querySelector('#group_mac .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_mac .form_message_error').textContent = "MAC incorrecto";
			}

			break;

		case "ip":

			if (validIp(e.target.value)) {
				document.querySelector('#group_ip').classList.remove('form_group_incorrect');
				document.querySelector('#group_ip').classList.add('form_group_correct');
				document.querySelector('#group_ip em').classList.add('fa-check-circle');
				document.querySelector('#group_ip em').classList.remove('fa-times-circle');

				document.querySelector('#group_ip .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_ip .form_message_error').textContent = "IP correcto";

			} else {
				document.querySelector('#group_ip').classList.add('form_group_incorrect');
				document.querySelector('#group_ip').classList.remove('form_group_correct');
				document.querySelector('#group_ip em').classList.add('fa-times-circle');
				document.querySelector('#group_ip em').classList.remove('fa-check-circle');

				document.querySelector('#group_ip .form_message_error').classList.add('form_error_message_active');
				document.querySelector('#group_ip .form_message_error').textContent = "IP incorrecto";
			}

			break;
	}
};

input.forEach((input) => {
	input.addEventListener('keyup', validateForm);
	input.addEventListener('blur', validateForm);

});

form.addEventListener('submit', (e) => {
	e.preventDefault();
	console.log('enviado');
});

// Functions

const capitalize = (str) => {
	return str.replace(/\b\w/g, (l) => l.toUpperCase());
}

const reverseCapitalized = (str) => {
	for (let i = 0; i < str.length; i++) {
		if (str[i] === str[i].toUpperCase()) {
			str = str.replace(str[i], str[i].toLowerCase());
		} else {
			str = str.replace(str[i], str[i].toUpperCase());
		}
	}
	return str;
}

const camelCase = (str) => {
	const newStr = capitalize(str);
	return newStr.replace(/\s/g, '');
}

const sinCamelCase = (str) => {
	return str.replace(/([A-Z])/g, ' $1').trim();
}

const endStr = (str) => {
	const n = str.split(" ");
	return n[n.length - 1];
}

const startStr = (str) => {
	const n = str.split(" ");
	return n[0];
}

const validIp = (str) => {
		let valid = str.split('.');
		if(valid.length !== 4)
			return false;
		for(let i in valid){
			if(!/^\d+$/g.test(valid[i])
				||+valid[i]>255
				||+valid[i]<0
				||/^0[0-9]{1,2}/.test(valid[i]))
				return false;
		}
		return true;
}