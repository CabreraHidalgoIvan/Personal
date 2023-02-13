// Tiene Hosting?? -> Si, si es declarativa todas las funciones tienen hosting
// -------------------------------------- \\
// function sayHello() {
//   console.log('Hola desde una función declarativa')
// }
// sayHello() // 'Hello'


// Arrow function
// -------------------------------------- \\
// let sayHello = () => {
//   console.log('Hola desde una arrow function')
// }
// sayHello() // 'Hola desde una arrow function'


// -------------------------------------- \\
// Vamos a ver un ejemplo práctico de una arrow function.
// Menos codificación con arrow function
// const peliculas = [
//     { nota: 8.4, titulo: 'Reservoir Dogs' },
//     { nota: 8.3, titulo: 'Babe el cerdito valiente' },
//     { nota: 6.2, titulo: 'Alien vs Predator' }
//   ]

//   // Using the function keyword
//   // peliculas.sort(function (a, b) {
//   //   return a.nota - b.nota;
//   // })

//   // Using the arrow function syntax
//   peliculas.sort((a, b) => a.nota - b.nota);



  // -------------------------------------- \\

  //Una Closure es la combinación de una función
  // y del contexto léxico en la 
  // cual ha sido definida
  window.nombre = 'Sultan';

  class Perro {
    constructor(nombre) {
      this.nombre = nombre
    }

    ladra() {
      console.log(`Woof, mi nombre es ${this.nombre}`);
    }

    sientateYLadra() {
      // setTimeout(function(){console.log(`Woof, mi nombre es ${this.nombre}`)} , 1000);
      setTimeout((() => console.log(`Woof, my name is ${this.nombre}`)).bind(this), 1000);   // bind -> es para que no se salga de la funcion y haga hosting
    }
  }

  let rex = new Perro('Rex')

  rex.ladra()
  rex.sientateYLadra();