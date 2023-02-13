/*function saludar(nombre){
    console.log(`Hola, soy ${this.nombre}`);
}*/

//==========================================================================================/
/*const yo = {
    nombre:"Benzema",
    saludar: function(){
        console.log(`Hola, mi nombre es: ${this.nombre}`);
    }
}

const saludar = yo.saludar.bind(yo);*/
//======IMPLICIT BINDING=================================================================/
/*const sacha = {
    nombre:"Sacha",
    saludar: function(){
        console.log(`Hola, mi nombre es: ${this.nombre}!`);
    },
    hermano: {
        nombre: 'Eric',
        saludar: function(){
            console.log(`Yo, el hermano, me llamo ${this.nombre}`);
        },
    },
}*/

//================QUIEN ES THIS=====================================/
/*const sacha = {
    nombre:'Sacha',
    twitter: '@sachalifs',
    saludar: function(){

     console.log(`Yo me llamo ${this.nombre}`);
        this.seguimeEnTwitter();
    },
    seguimeEnTwitter: function (){
    console.log(`Hola, mi twitter es: ${this.twitter}!`);
}
}*/
//================QUIEN ES THIS, LO ARREGLAMOS======================/
/*
const sacha = {
    nombre:'Sacha',
    twitter: '@sachalifs',
    saludar: function(){
        function seguimeEnTwitter(){
            console.log(Hola, mi nombre es: ${this.twitter}!);
        }
        console.log(Yo, el hermano, me llamo ${this.nombre});
        this.seguimeEnTwitter();
    },
    seguimeEnTwitter: function(){
        console.log(Seguime en Twitter: ${this.twitter});
    }
};*/
