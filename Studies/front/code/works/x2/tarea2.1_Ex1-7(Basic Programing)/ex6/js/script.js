// Array of dni words
const words = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

// Get the dni number
const dni = prompt('Introduce tu DNI sin la letra: ');
const dniWord = prompt('Introduce la letra del DNI: ');

(dni.length < 0 || dni.length > 99999999)
	? console.log('El DNI introducido no es válido')
	: (words[dni % 23] === dniWord.toUpperCase())
		? (console.log('La letra del DNI introducida es correcto'),
			console.log(`Tu DNI completo es: ${dni}${dniWord.toUpperCase()}`))
		: console.log('El DNI introducido no es correcto');


