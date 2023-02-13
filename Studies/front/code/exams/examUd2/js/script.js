// // --------------- Exercise 1 --------------- \\

const array = [1,2,3, "cat"];
let mlitiplicacionForOf = 1;

for (const element of array){

    // typeof element === "number" ? (mlitiplicacionForOf = element * mlitiplicacionForOf);
    if(typeof element === "number")
    mlitiplicacionForOf = element * mlitiplicacionForOf;
}
console.log(mlitiplicacionForOf);

// // --------------- Exercise 2-3 --------------- \\


window.addEventListener("DOMContentLoaded", () => {
    
    let paragraph = document.querySelector('#paragraph');
    
    paragraph.addEventListener('click', () => {
        
        showInfo();
        console.log(`1 nombre-> ${humans.name}
                     2 apellido -> ${humans.lastName}
                     3 edad -> ${humans.age}
                     4 ciudad -> ${humans.city}
                     5 estudios -> ${humans.study}`);


        let li = document.querySelector('olEx3');

        li.innerHTML = `1 nombre-> ${humans.name}
        2 apellido -> ${humans.lastName}
        3 edad -> ${humans.age}
        4 ciudad -> ${humans.city}
        5 estudios -> ${humans.study}`;
    });
    
});

const humans = {
    'name': "Ivan",
    'lastName': "Cabrera",
    'age': 18,
    'city': "Córdoba",
    'study': "DAW"
};

console.log(`1 nombre-> ${humans.name}
2 apellido -> ${humans.lastName}
3 edad -> ${humans.age}
4 ciudad -> ${humans.city}
5 estudios -> ${humans.study}`);

console.log(humans);



// Functions 
function showInfo(array) {
    let list = document.querySelector('#olEx3');
    const fragment = new DocumentFragment();
    const li = document.createElement('li');



    let text = `1 nombre-> ${humans.name}
    2 apellido -> ${humans.lastName}
    3 edad -> ${humans.age}
    4 ciudad -> ${humans.city}
    5 estudios -> ${humans.study}`;

    li.textContent = text;

    fragment.appendChild(li);

    list.appendChild(fragment);

};



