function add() {

  let element = document.createElement('li');       // Create a list element
  let text = document.createTextNode('test text');  // Create a text node
  element.appendChild(text);                        // Add the text node to list element

  let list = document.querySelector('#lista');      // Select the list
  list.appendChild(element);                        // Add the list element to list

  let newElement = 'Hello World';        // Create another element

  // ------------ FRAGMENT------------ \\
  const fragment = new DocumentFragment();
  let li = document.createElement('li');
  li.textContent = newElement;
  
  const firstChild = fragment.firstChild;
  fragment.insertBefore(li, firstChild);

  list.appendChild(fragment);
};

const button = document.querySelector('#button');
button.addEventListener("click", add, false);