let fichajesRealMadrid = [];
const arrayJugadoresMadrid=["Raul","Hierro","Modric","Casano","Ivan Campo"];


do{
    const jugador = prompt(`Mercado de fichajes, Qué jugaor desea fichar ⚽`);
    fichajesRealMadrid.push(jugador);
}
while(confirm(`¿Desea fichar a más jugadores?`));

for(fichaje of fichajesRealMadrid){
    console.log(`Ha fichado a: ${fichaje}`);
} 
// // fichajesRealMadrid.forEach((persona)=>{
// //     persona.toLowerCase() == 'figo' ? console.log(`${persona} es un traidor pero lo ha fichado`) : console.log(`ha fichado a: ${persona}`); 
// //     });

// // for(propiedad in fichajesRealMadrid){
// //     console.log(`la propiedad es ${propiedad} y el valor de la propiedad es: ${fichajesRealMadrid[propiedad]}`);
// // }

// while(arrayJugadoresMadrid.length>0){
//     const jugador = arrayJugadoresMadrid.pop();
//     // if(jugador === "Raul"){
//     //     console.log(`${jugador} es el mejor jugador`);

//     // }else{
//     //     console.log(`${jugador} secundario Bob`);
//     // }
//     jugador === "Raul" ? (console.log(`${jugador} (es el mejor jugador`),console.log(`Ahora está retirado`)):console.log(`${jugador} secundario Bob`);
// }

// const cita = "hold de door";
// const cadenaSinEspacios = cita.trim(" ");
// console.log(cadenaSinEspacios);

// let cadena = "La ruta nos aporto otro paso natural";
// let cadenaOriginal = cadena;
// function comprobarPalindromo(cadena) {
//     cadena = cadena.replace(/ /g, "").toLowerCase();
//     let aux = cadena.replace(/ /g, "").toLowerCase().split("");
//     let cadenaInvertida = cadena.split("").reverse();
//     let todosLosElementosIguales = true;
//     let respuesta;
//     console.log(aux);
//     console.log(cadenaInvertida);
//     aux.forEach(letra => { 
//         if (letra != cadenaInvertida.shift()){
//             todosLosElementosIguales = false;
//         };
//     });
//     todosLosElementosIguales ? respuesta = "es palindromo" : respuesta = "no es palindromo";
//     return respuesta;
// }
// console.log("La cadena " + cadenaOriginal + comprobarPalindromo(cadena));


    // const parOImpar = (num) => {
    //     if(num % 2 == 0){
    //         console.log(`El número ${num} es par`);
    //     }
    //     else{
    //         console.log(`El número ${num} es impar`);
    //     }
    // }
    // parOImpar(4);
