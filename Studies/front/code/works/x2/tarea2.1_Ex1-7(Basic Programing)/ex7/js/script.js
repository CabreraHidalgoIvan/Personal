// Ask for a number
const number = prompt("Introduce un numero: ");


let factorial = 1;

// Calculate the factorial of the number with a for loop
for (let i = 1; i <= number; i++) {
	factorial *= i;
}

// Show the result
console.log(`El factorial de ${number} es ${factorial}`);