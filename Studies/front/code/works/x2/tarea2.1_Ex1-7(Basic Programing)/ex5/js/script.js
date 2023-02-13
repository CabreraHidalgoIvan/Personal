// Create variables
let numero1 = 5;
const numero2 = 8;

// Condition to check if the first number is greater than the second
if (numero1 < numero2) {
	console.log(`El numero ${numero1} no es mayor que el numero ${numero2}`);
}

// Condition to check if the second number is greater or equal than 0
if (numero2 >= 0) {
	console.log(`El numero ${numero2} es positivo`);
}

// Condition to check if the first number is less
if (numero1 !== 0) {
	console.log(`${numero1} es negativo o distinto de cero`);
}

// Condition to check if the first number + 1 is not equal or greater than the second
if (numero1++ <= numero2) {
	console.log(`Incrementar en 1 unidad el valor de ${numero1} (${numero1+1}) no lo hace mayor o igual que ${numero2}`);
}