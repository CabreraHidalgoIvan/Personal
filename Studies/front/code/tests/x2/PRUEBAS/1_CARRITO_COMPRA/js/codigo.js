const plantillaRealMadrid= [];

const jugador = prompt("🌏Fichajes Real Madrid 22/23💥⚽,¿Qué jugador desea comprar?");

console.log("Compraste : " + jugador);

plantillaRealMadrid.push(jugador);

while(confirm("🏃‍♂️¿Desea comprar más jugadores?⚽")){

    const jugador = prompt("¿Qué jugador desea comprar?");
    plantillaRealMadrid.push(jugador);

}

console.log("Tu equipo💪🛒: ");

plantillaRealMadrid.forEach(jugador => console.log(jugador));
