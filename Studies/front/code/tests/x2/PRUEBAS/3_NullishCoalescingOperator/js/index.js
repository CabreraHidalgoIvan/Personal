// Nullish Coalescing Operator
// operando1 ?? operando2
// operando1  operando2
// El operando ?? arregla el uso del operando  en cuanto a manejar operadores falsy
// Sólo actúa cuando el valor es undefined o null

class Persona {
  constructor(datos) {
    this.nombre = datos.nombre;
    this.primerApellido = datos.primerApellido;
    this.segundoApellido = datos.segundoApellido ?? 'huerphan';
    this.edad = datos.edad;
    this.hijos = datos.hijos ?? '0';
  }

  print() {
    console.log(
      `Nombre: ${this.nombre}\n`,
      `Primer apellido: ${this.primerApellido}\n`,
      `Segundo apellido: ${this.segundoApellido}\n`,
      `Edad: ${this.edad}\n`,
      `Numero de Hijos: ${this.hijos}\n`
    );
  }
}

const persona = new Persona({
  nombre: 'Alberto',
  primerApellido: 'García',
  edad: 18
});

persona.print();