// Create elements to identify the tags on html
const element = document.querySelector('#contenidos_1');
const element2 = document.querySelector('#contenidos_2');
const element3 = document.querySelector('#contenidos_3');

const link = document.querySelector('#enlace_1');
const link2 = document.querySelector('#enlace_2');
const link3 = document.querySelector('#enlace_3');

// Create event click to a link to hide or show the information
link.addEventListener('click', () => {
  element.style.display === '' || element.style.display === 'block' ? (element.style.display = 'none', link.textContent = 'Show') : (element.style.display = 'block', link.textContent = 'Hide');
});

link2.addEventListener('click', () => {
  element2.style.display === '' || element2.style.display === 'block' ? (element2.style.display = 'none', link2.textContent = 'Show') : (element2.style.display = 'block', link2.textContent = 'Hide');
});

link3.addEventListener('click', () => {
  element3.style.display === '' || element3.style.display === 'block' ? (element3.style.display = 'none', link3.textContent = 'Show') : (element3.style.display = 'block', link3.textContent = 'Hide');
});

// Create fragment to show the information on the screen browser
const fragment = new DocumentFragment();
const textShow = document.createTextNode('Show');

fragment.appendChild(textShow);
