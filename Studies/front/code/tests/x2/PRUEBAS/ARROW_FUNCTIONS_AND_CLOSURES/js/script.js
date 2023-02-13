// //Uso normal de una Arrow Function
// function sayHello() {
//     console.log('Hola desde una función declarativa')
//   }
//   sayHello() // 'Hello'
//=========================================================== 
// Como las arrow functions son anónimas se han de asignar 
// a una variable para poder ser llamadas.
// const sayHello = () => { 
// console.log('Hola desde una arrow function')
// }
// sayHello() // 'Hola desde una arrow function'

//============================================================
// Vamos a ver un ejemplo práctico de una arrow function.
// Menos codificación con arrow function
// const peliculas = [
//     { nota: 8.4, titulo: 'Reservoir Dogs', filmaffinity: 0 },
//     { nota: 8.3, titulo: 'Babe el cerdito valiente',filmaffinity: 10 },
//     { nota: 6.2, titulo: 'Alien vs Predator', filmaffinity:3 }
//   ]
  
  // Using the function keyword
  // peliculas.sort(function (b, a) {
  //   return a.filmaffinity - b.filmaffinity;
  // })
  
  // Using the arrow function syntax
  // peliculas.sort((a, b) => a.nota - b.nota);
  //============================================================
  //Una Closure es la combinación de una función
  // y del contexto léxico en la 
  // cual ha sido definida
  // window.nombre = 'Sultán';
  // class Perro {
  //   constructor(nombre) {
  //     this.nombre = nombre
  //   }
  
  //   ladra() {
  //     console.log(`Woof, mi nombre es ${this.nombre}`);
  //   }
  
  //   sientateYLadra() {
  //     setTimeout(()=> console.log(`Woof, mi nombre es ${this.nombre}`) , 1000);
  //     //setTimeout((function() { console.log(`Woof, my name is ${this.nombre}`) }).bind(this), 1000);
  //   }
  // }
  
  // let rex = new Perro('Rex');

  
  // rex.ladra()
  // rex.sientateYLadra();
// Ahora vemos el problema con la closure, una closure crea su propio contexto
// por eso busca nombre en el contexto de la funcion argumento de setTimeout y no en el objeto Perro.
// Lo arreglamos:

//setTimeout((function() { console.log(`Woof, my name is ${this.name}`) }).bind(this), 1000)
//setTimeout(()=>{ console.log(`Woof, my name is ${this.name}`) }, 1000)
//setTimeout(()=>console.log(`Woof, my name is ${this.name}`), 1000)