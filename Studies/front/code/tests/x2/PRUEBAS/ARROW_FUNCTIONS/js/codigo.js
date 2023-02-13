console.log(`El resultado de la funcion declarativa es: ${numAleatorio(0,50)}`);
//Función declarativa
function numAleatorio(min,max){
    return Math.floor((Math.random()*(max-min))+min);
}


// Función anónima
const randomNumber = (min,max) => {Math.floor((Math.random()*(max-min))+min)};

 console.log(`El numero aleatorio segun una funcion anónima es: ${randomNumber(50)}`);








