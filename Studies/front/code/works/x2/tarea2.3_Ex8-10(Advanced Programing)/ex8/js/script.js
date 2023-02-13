// Function with a number parameter that returns a string

function isPair(number) {
	(number % 2 === 0) ? console.log("The number is pair") : console.log("The number is odd");
}

// Try the function
const number = prompt("Enter a number: ");

isPair(number);