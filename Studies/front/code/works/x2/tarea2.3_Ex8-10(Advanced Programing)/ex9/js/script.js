// Crate constants to store the strings
const capitalString = "HELLO WORLD";
const notCapitalString = "hello world";
const mixedCapitalString = "Hello World";


// Function that check if the string is capitalized or not
function isCapitalized(str) {

		if (str === str.toUpperCase()) {
			return console.log("The string is capitalized");
		} else if (str === str.toLowerCase()) {
			return console.log("The string is not capitalized");
		} else {
			return console.log("The string is mixed");
		}

}

// Call the function and print the result
isCapitalized(capitalString);
isCapitalized(notCapitalString);
isCapitalized(mixedCapitalString);