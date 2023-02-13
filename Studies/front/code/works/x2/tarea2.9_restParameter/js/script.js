// ---------- Exercise 1 ---------- \\

function sum(...rest) {

  let result = 0;
  
  for (const num of rest) {
    result += num;
  }

  return result;

};

console.log(sum(1, 1, 1, 1, 1, 1, 1, 1));

// ---------- Exercise 2 ---------- \\

let rest = [1, 2, [3, [4, 5, [6, 7]]]];

console.log(sum(...rest));

// ---------- Exercise 3 ---------- \\

/*
let newArray = [...rest];

console.log(newArray);
console.log(rest);

newArray.push(4);

console.log(newArray);
console.log(rest);
*/

// ---------- Exercise 4 ---------- \\

const object = {
  property1: 1,
  property2:
    {
      property3: 2, property4:
        {property5: 3}
    }
}

const objectCopy = {...object};

console.log('------- OBJECT -------');

console.log('Objeto sin modificar');
for (const element in object) {
  console.log(object[element]);
}

console.log('Copia de objeto sin modificar');
for (const element in objectCopy) {
  console.log(objectCopy[element]);
}

// Push to change the array
object.property999 = 0;

console.log('Objeto modificado (se añade el 0)');
for (const element in object) {
  console.log(object[element]);
}

console.log('Copia de obeto modificada (no se copia el 0)');
for (const element in objectCopy) {
  console.log(objectCopy[element]);
}
