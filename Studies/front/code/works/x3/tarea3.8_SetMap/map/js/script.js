console.log("EJERCICIO 6");

const array1 = ['Jirafa', 'perro', 'pajaro', 'Gato', 'Tortuga'];
const map1 = new Map(array1.map((element) => [element, array1.indexOf(element)]));

console.log(array1);
console.log(map1);

const arrayKeys = Array.from(map1.keys());
console.log('Array de las claves del map: ', arrayKeys);

const arrayValues = Array.from(map1.values());
console.log('Array de los valores del map: ', arrayValues);

const arrayEntries = Array.from(map1.entries());
console.log('Array de los objetos del map: ', arrayEntries);


console.log('EJERCICIO 7');

const map2 = new Map().set('a', 1).set(2, NaN).set(true, 3.12).set(null, func());

console.log(map2);

function func() {
	return 'Hello I am a function';
}

console.log('EJERCICIO 8');

const map3 = new Map().set(1, 'Pepe').set(2, 'Juan').set(3, 'Maria').set(4, 'Pepe').set(5, 'Antonio').set(6, 'Maria');

console.log(map3);

console.log('EJERCICIO 9');

const array4 = ['Pepe', 'Juan', 'Maria', 'Pepe', 'Antonio', 'Maria'];

function quitaLosRepes(array) {
	return Array.from(new Set(array));
}

console.log(quitaLosRepes(array4));

console.log('EJERCICIO 10');

const weakSet10 = new WeakSet();
/*weakSet10.add(true);*/               // Error, porque true no es un objeto (descomentar para ver excepción)
console.log('No se pueden añadir valores primitivos a un WeakSet, solo objetos');
console.log(weakSet10);

console.log('EJERCICIO 11');

const weakMap11 = new WeakMap().set({a: 1}, 'Pepe').set({b: 2}, 'Juan').set({c: 3}, 'Maria');
const weakSet11 = new WeakSet().add({ uno: 1 }).add({ dos: 2 }).add({ tres: 3 }).add({ cuatro: 4 });

for (let weakMap11Key in weakMap11) {
	console.log(weakMap11Key);
}

for (let weakSet11Key in weakSet11) {
	console.log(weakSet11Key);
}

console.log('WeakMap y WeakSet no tienen métodos para iterar sus elementos');
