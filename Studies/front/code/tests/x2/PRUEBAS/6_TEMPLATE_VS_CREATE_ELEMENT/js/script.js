const lista = document.querySelector('#lista');
const arrayEquiposFutbol =['Madrid','Farsa','Patético de Madrid','Valencia','Espanyol'];
// arrayEquiposFutbol.forEach((equipo)=>{
//     const li = document.createElement('li');
//     li.textContent = equipo;
//     lista.appendChild(li);});

// Con InnterHtml Mala práctica. Reflow. Se puede inyectar código.
// arrayEquiposFutbol.forEach((equipo)=>{
//     lista.innerHTML += `<li>${equipo}</li>`;
// });
//================================================================
// Con Fragment no causa reflow aunque se modifique dentro del DOM

// const fragment = document.createDocumentFragment();
// arrayEquiposFutbol.forEach((equipo)=>{
//     const li = document.createElement('li');
//     li.textContent = equipo;
//     fragment.appendChild(li);
// }) 
// lista.appendChild(fragment);
//================================================================
//Podemos invertir la inserción haciendolo siempre al principio
// const fragment = document.createDocumentFragment();
// arrayEquiposFutbol.forEach((equipo)=>{
//     const li = document.createElement('li');
//     li.textContent = equipo;
//     const firstChild = fragment.firstChild;
//     fragment.insertBefore(li,firstChild);
// }) 
// lista.appendChild(fragment);
//================================================================
//Ahora imaginamos que la lista tiene estilos, queremos poner en negrita y demás con Bootstrap
/*<li class="list">
    <b>Equipo:</b> 
    <span class="text-primary">Aquí va el equipo</span>
</li>*/
// const fragment = new DocumentFragment();
// arrayEquiposFutbol.forEach(equipo =>{
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
//=============================================================================
//Todo lo de arriba se podría resumir en:
// arrayEquiposFutbol.forEach((equipo)=>{
//     lista.innerHTML += `
//         <li class="list">
//             <b class="text-primary">Equipo: </b>
//             <span>${equipo}</span>
//         </li>`
// });
//==============================================================================
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
// const clone = liTemplate.content.firstElementChild.cloneNode(true);
// const liTemplate = document.querySelector('#idtemplate');
// const fragment = new DocumentFragment();
// const click = (e)=>{
//     console.log("Me has hecho click"+e.currentTarget.innerHTML);
// };
// arrayEquiposFutbol.forEach(equipo=>{
//     const clone = liTemplate.content.firstElementChild.cloneNode(true);
//     clone.addEventListener('click',click);
//     clone.querySelector('span').textContent= equipo;
//     fragment.appendChild(clone);
// });
// lista.appendChild(fragment);