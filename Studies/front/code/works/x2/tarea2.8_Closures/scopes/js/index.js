const num1 = 1;   // Global

function add(a) {
  if (num1 > 0) {
    const num1 = a;
    return (b) => (num1+b);   // Local
  }
}


console.log(num1);

const sum5 = add(5);

console.log(sum5(5));