// -------------- Ejercicio 1 -------------- \\

// Comentario en línea
/*
  Comentario multi línea
  Otra linea
 */


// -------------- Ejercicio 2 -------------- \\

let num1 = 1;
let num2 = 2;

(num1 > num2) ? console.log(num1) : console.log(num2);


// -------------- Ejercicio 3 -------------- \\

let nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
let count = 0;

for (const num of nums) {
  console.log(num);
  count++;
}

console.log(`Se han realizado ${count} iteraciones`);

// -------------- Ejercicio 4 -------------- \\

for (const num in nums) {
  console.log(`El índice ${num} del array nums tiene el valor ${nums[num]}`);
}

// -------------- Ejercicio 5 -------------- \\

let a = 1;
let b = 2;

console.log(a, b);

[b, a] = [a, b];

console.log(a, b);
