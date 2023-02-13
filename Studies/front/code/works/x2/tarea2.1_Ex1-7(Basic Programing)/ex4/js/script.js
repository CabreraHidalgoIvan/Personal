// Array with random values
const values = [true, 5, false, "hola", "adios", 2];

// Function to check the longer string (exercise 1)
console.log("Exercise 1");

if (values[3] === values[4]){
		console.log("Son iguales");
}else if (values[3] > values[4]){
		console.log("hola es mayor");
}else {
		console.log("adios es mayor");
}

// Operations with booleans and logic operators (exercise 2)
console.log("Exercise 2");
const resultTrue = values[0] || values[2];
const resultFalse = values[0] && values[2];

console.log(`The result of true || false is ${resultTrue}`);
console.log(`The result of true && false is ${resultFalse}`);


// Operations with numbers (exercise 3)
console.log("Exercise 3");
const sum = values[1] + values[5];
const subtract = values[1] - values[5];
const multiplication = values[1] * values[5];
const division = values[1] / values[5];
const mod = values[1] % values[5];

console.log(`The sum of 5 + 2 = ${sum}`);
console.log(`The subtract of 5 - 2 = ${subtract}`);
console.log(`The multiplication of 5 * 2 = ${multiplication}`);
console.log(`The division of 5 / 2 = ${division}`);
console.log(`The mod of 5 % 2 = ${mod}`);

// Another possible way to do the operations directly (exercise 3)

console.log(`The sum of 5 + 2 = ${values[1] + values[5]}`);