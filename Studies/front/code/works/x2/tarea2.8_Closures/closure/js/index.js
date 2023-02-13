const mult = null;

function multiply(a) {                      // function with nullish asignment
  let mult = a;

  return (b) => ((mult ??= 1) * (b ??= 1));   // Logical nullish asignment

}

const multiply10 = multiply(10);            // closure


console.log(multiply10(2));                 // closure multiply10(2) == 10 * 2
console.log(multiply10(5));                 // closure multiply10(5) == 10 * 5

console.log(multiply()());                  // multiply()() == 1 * 1
console.log(multiply()(5));                 // multiply()(5) == 1 * 5
console.log(multiply(5)());                 // multiply()() == 5 * 1
