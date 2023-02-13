const num1 = 1;                       // Global

if (num1 > 0) {                       // Block
  function multiply(num1) {           // Function
  
    return function (num2) {          // Nested function
  
      return function (num3) {
        return num1 * num2 * num3;    // Local
      };
  
    };
  
  };
};

console.log(num1);                    // Show global

console.log(multiply(5)(5)(10));

const multiply10 = multiply(2)(5);    // Closure

console.log(multiply10(5));