const lista = document.querySelector(`[id=lista]`);
const equiposFutbol = ["RealMadrid", "Farsa", "Patético de Madrid", "Valencia", "Espanyol"];

// equiposFutbol.forEach((equipo)=>{
//     const li = document.createElement('li');
//     li.textContent = equipo;
//     lista.appendChild(li);
// });
//=========================================================================================
// equiposFutbol.forEach((equipo)=>{
//     lista.innerHTML += `<li>${equipo}</li>`;
// });
//========================================================================================
//================================================================
// Con Fragment no causa reflow aunque se modifique dentro del DOM

// const fragment = document.createDocumentFragment();
// const fragment1 = new DocumentFragment();
// equiposFutbol.forEach((equipo)=>{
//     const li = document.createElement('li');
//     li.textContent = equipo;
//     fragment.appendChild(li);
// }) 
// lista.appendChild(fragment);
//===================================================================
//Podemos invertir la inserción haciendolo siempre al principio
// const fragment = document.createDocumentFragment();
// equiposFutbol.forEach((equipo)=>{
//     const li = document.createElement('li');
//     li.textContent = equipo;
//     const firstChild = fragment.firstChild;
//     fragment.insertBefore(li,firstChild);
// }) 
// lista.appendChild(fragment);

// const fragment = new DocumentFragment();
// equiposFutbol.forEach(equipo =>{
//     const li = document.createElement('li');
//     li.className = 'list';
//     const b = document.createElement('b');
//     b.textContent='Equipo: ';
//     const span = document.createElement('span');
//     span.className='text-primary';
//     span.textContent=`${equipo}`;
//     li.appendChild(b);
//     li.appendChild(span);
//     fragment.appendChild(li);
// });
// lista.appendChild(fragment);
// lista.appendChild(fragment);
//=============================================================================
// Todo lo de arriba se podría resumir en:
// equiposFutbol.forEach((equipo)=>{
//     lista.innerHTML += `
//         <li class="list">
//             <b class="text-primary">Equipo: </b>
//             <span>${equipo}</span>
//         </li>`
// });*/
//Puede que no provoque reflow pero es una cutrez
// let template ='';
// arrayEquiposFutbol.forEach((equipo)=>{
//     template += `
//         <li class="list">
//             <b class="text-primary">Equipo: </b>
//             <span>${equipo}</span>
//         </li>`
// });
// lista.innerHTML = template;
//==============================================================================
// Solución intermedia, Template. Hacer un snipped <template> en Visual Studio si no está hecho todavía.
// Cuidado con manipular el content directamente al template, siempre clonar antes.
// Si queremos agregar un evento(click) a cada elemento clon: 
/*const clone = liTemplate.content.firstElementChild.cloneNode(true);*/

const liTemplate = document.querySelector('#idtemplate');
const fragment = new DocumentFragment();
const click = (e) => {
	console.log("Me has hecho click" + e.currentTarget.innerHTML);
};
equiposFutbol.forEach(equipo => {
	const clone = liTemplate.content.firstElementChild.cloneNode(true);
	clone.addEventListener('click', click);
	clone.querySelector('span').textContent = equipo;
	fragment.appendChild(clone);
});
lista.appendChild(fragment);