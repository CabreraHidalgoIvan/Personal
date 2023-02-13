console.log("------EJERCICIO 1------");

const array1 = [1, 2, 3, 4, 4];

const set1 = new Set(array1);

console.log(`El tamaño del set es: ${set1.size} debido a que los valores repetidos no se agregan`);
console.log(set1.values());


console.log("------EJERCICIO 2------");

const set2 = new Set().add(11).add(22);

console.log(set2.values());

console.log("------EJERCICIO 3------");

console.log(`Podemos buscar un valor en el set con el metodo "set2.has(11)": ${set2.has(11)}`);
console.log(`Podemos ver los valores del set con el metodo values:`);
console.log(set2.values());

console.log("------EJERCICIO 4------");

const array4 = [1, 2, 3, 4, 4, NaN];
const set4 = new Set(array4);

console.log(`1. La principal diferencia entre un set y un array es que en un set no se pueden repetir los valores`);
console.log(`SIN DUPLICADOS: ${set4.size} - DUPLICADOS: ${array4.length}`);

console.log(`2. Para buscar un elemento la diferencia es que el set devuelve un booleano y el array devuelve el valor o -1 si no lo encuentra`);
console.log(`SET: ${set4.has(4)} - ARRAY: ${array4.find((element) => element === 4)}`);

console.log("3. Buscar un elemento NaN en array y set");
console.log(`SET: ${set4.has(NaN)}`);
console.log(`ARRAY: ${array4.find((element) => Number.isNaN(element))}`);

console.log(`4. Para eliminar un elemento de un set usamos el metodo delete para borrar un único elemento o clear para borrar todos los elementos`);
console.log(`SET: ${set4.delete(4)}`);
console.log(set4.values());
console.log(`4. Para eliminar un elemento de un array tenemos varios métodos: pop, shift, splice`);
console.log(`ARRAY: ${array4.shift()} .Quitamos el primer elemento`);
console.log(array4);
console.log(`ARRAY: ${array4.pop()} .Quitamos el último elemento`);
console.log(array4);

console.log("------EJERCICIO 5------");

const set5 = new Set().add('Pepe').add('Juan').add('Maria').add('Pepe').add('Antonio').add('Maria');

console.log(set5.values());