// Templates & fragments
const list = document.querySelector("#list")
const listTemplate = document.querySelector("#listTemplate");

// Data
const array = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
const array2 = ["Day", ["Month", ["Year"]]];
const dog = {name: "Firulais", age: 5, color: "brown"};


// Templates & Fragments
// FRAGMENT
/*// -----------------------------------------------------------------------------------------\\
	// FRAGMENT -> Don't cause reflow but modify the DOM
		// Two different ways to create a fragment
/*		const fragment = document.createDocumentFragment();*!/
		const fragment = new DocumentFragment();

		array.forEach((element)=>{                      // Find the elements to insert

			const li = document.createElement('li');    // Create the HTML tag
			li.textContent = element;                           // Add the content to the tag
			fragment.appendChild(li);                           // Add the tag to the fragment

		});

		list.appendChild(fragment);                           // Add the fragment to the DOM

// -----------------------------------------------------------------------------------------\\*/


// TEMPLATE
/*!// -----------------------------------------------------------------------------------------\\
	// TEMPLATE -> Don't cause reflow and don't modify the DOM

	const liTemplate = document.querySelector('#idTemplate');                     // Find the template on the HTML
	const fragment = new  DocumentFragment();                                              // Create the fragment
	const click = (e) => {console.log("Me has hecho click" + e.currentTarget.innerHTML)};  // Create the event

array.forEach(element => {                                                               // Find the elements to insert

		const clone = liTemplate.content.firstElementChild.cloneNode(true);            // Clone the template
		clone.addEventListener('click', click);                                        // Add the event to the clone
		clone.querySelector('span').textContent = element;                                   // Add the content to the clone
		fragment.appendChild(clone);                                                         // Add the clone to the fragment

	});

list.appendChild(fragment);                                                              // Add the fragment to the DOM

// -----------------------------------------------------------------------------------------\\*/


// Loops
// FOR EACH
/*// -----------------------------------------------------------------------------------------\\
// Call each element of the array (No empty elements) (No objects)
// Example -> Array.forEach((element, index, array) => {console.log(element, index, array)});
// Can't use BREAK or CONTINUE

array.forEach(element => {
	console.log(`The day ${element} is the ${array.indexOf(element) + 1} day of the week`);
});

// -----------------------------------------------------------------------------------------\\*/

// FOR OF
/*// -----------------------------------------------------------------------------------------\\
// Returns the value of the element (No empty elements) (No objects)
// Can use BREAK and CONTINUE
for (const element of array) {
	console.log(`The day ${element} is the ${array.indexOf(element) + 1} day of the week`);
}

// -----------------------------------------------------------------------------------------\\*/

// FOR IN
/*// -----------------------------------------------------------------------------------------\\
// For in returns the index of the array (Objects)
for (const element in array) {
	console.log(`${element} is the index of the element ${array[element]}`);
}

for (const dogElement in dog) {
	console.log(dogElement);
	console.log(dog[dogElement]);
}

// -----------------------------------------------------------------------------------------\\*/


// Events
window.addEventListener('DOMContentLoaded', () => {
	showInfo();


// MOUSEMOVE
// -----------------------------------------------------------------------------------------\\
// Mousemove -> When the mouse moves
	/*	Example -> document.addEventListener('mousemove', (e) => {console.log(e)});
			IMPORTANT -> screenX and screenY -> Position of the mouse on the screen
			IMPORTANT -> pageX and pageY -> Position of the mouse on the page
	*/
	window.addEventListener('mousemove', (e) => {
		const divInfoMouse = document.querySelectorAll(`[id *= infoMouse]`);

		divInfoMouse.forEach(element => {
			element.style.backgroundColor = "red";
		});

		getKeyboardAndMouseInfo([e.screenX, e.screenY, e.pageX, e.pageY, null, null]);
	});

// -----------------------------------------------------------------------------------------\\

// KEYDOWN
// -----------------------------------------------------------------------------------------\\
// Keydown -> When a key is pressed
	/*	Example -> document.addEventListener('keydown', (e) => {console.log(e)});
			IMPORTANT -> key -> Key pressed
			IMPORTANT -> key.charCodeAt(0) -> Code of the key pressed
	*/
	window.addEventListener('keydown', (e) => {
		const divInfoKeyboard = document.querySelector(`[id *= infoKey]`);

		divInfoKeyboard.style.backgroundColor = "green";

		getKeyboardAndMouseInfo([null, null, null, null, e.key, e.key.charCodeAt(0)]);
	});

// -----------------------------------------------------------------------------------------\\

// CLICK
// -----------------------------------------------------------------------------------------\\
// Click -> When the mouse is clicked
	/*	Example -> document.addEventListener('click', (e) => {console.log(e)});
			IMPORTANT -> key -> Key pressed
			IMPORTANT -> key.charCodeAt(0) -> Code of the key pressed
	 */

	window.addEventListener('click', (e) => {
		const infoMouse = document.querySelector(`[id *= infoMouse]`);

		infoMouse.style.backgroundColor = "blue";

		getKeyboardAndMouseInfo([e.screenX, e.screenY, e.pageX, e.pageY, null, null]);
	});


// -----------------------------------------------------------------------------------------\\

});

// DOM

// Nullish Falsy
/*const isFalsy = [null, undefined, NaN, 0, -0, 0n, false, ''];

const dog2 = {name: null ?? "Toby", age: 5, color: "brown"};
for (const dogKey in dog2) {
	console.log(dog2[dogKey]);
}
dog2.name = "Firulais";
for (const dogKey in dog2) {
	console.log(dog2[dogKey]);
}*/

// ...rest / slice
/*const copyArraySlice = array2.slice(1, 2);
const copyArrayRest = [...array2];

console.log(`First example -> ${copyArraySlice}`);
console.log(`First example -> ${copyArrayRest}`);

array2.push("New element");

console.log(`First example -> ${copyArraySlice}`);
console.log(`First example -> ${copyArrayRest}`);

console.log(`The original array -> ${array2}`);*/

/*const copyDog = dog.slice(1, 2);
console.log(copyDog);*/

// Objects

// Functions

// ======================= FUNCTIONS ======================= \\

// EVENTS FUNCTIONS
//  to draw the information on the web page
function showInfo() {
	const template = document.querySelector('#idTemplate');
	const clone = template.content.cloneNode(true);
	document.body.appendChild(clone);
}

// to get the keyboard and mouse information
function getKeyboardAndMouseInfo(array) {
	const arrayIds = (document.querySelectorAll('span'));

	arrayIds.forEach(element => {
		element.textContent = array.shift();
	})
}
