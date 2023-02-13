// Define the variable palindrome
const palindrome = "La ruta nos aporto otro paso natural";
let reverse = "";

// Create a function that check if a string is palindrome
function isPalindrome(palindrome) {
	// Remove spaces and change into lowercase
	palindrome = palindrome.replace(/ /g, "").toLowerCase();

	// Reverse the string and save it into reverse variable
	for (let i = palindrome.length - 1; i >= 0; i--) {
		reverse += palindrome[i];
	}

	// Check if the string is palindrome
	(palindrome === reverse) ? console.log(`La palabra: ${palindrome} es un palíndromo`) : console.log(`La palabra: ${palindrome} no es un palíndromo`);
}

// Call the function
isPalindrome(palindrome);