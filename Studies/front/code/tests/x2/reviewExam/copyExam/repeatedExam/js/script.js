/*
* 1. Create the Data
* 2. Create the Event
* 3. Create the function to show Info
* 4. Create the function to create the list
* 5. Add the list to the show Info function
* 6. Create the function to hide the list
* */


// ============== DATA ============== \\
const paragraph = document.querySelector('#idClick');
let count = 0;

const human = {
	name: 'Ivan',
	lastName: 'Cabrera',
	age: 22,
	birthDate: '2000-12-07',
	dog: false
}

const dog = {
name: 'Firulais',
age: 18,
breed: 'Pug'

}



// ============== EVENTS ============== \\
addEventListener('DOMContentLoaded', function () {   // It'js not necessary


	paragraph.addEventListener('click', function () {
		if (count === 0) {
			showInfo();
		} else if (count === 1) {
			hideInfo();
		}

	});


});

// ============== FUNCTIONS ============== \\

/*for (const properties in human) {
	console.log(`${properties}: ${human[properties]}`);
}*/

function showInfo() {
	const template = document.querySelector('#idTemplate');
	const clone = template.content.cloneNode(true);
	document.body.appendChild(clone);

	const ol = document.querySelector('#idOl');
	ol.appendChild(createList());
	count++;
}

function createList() {
	const fragment = new DocumentFragment();

	for (const properties in human) {
		const li = document.createElement('li');

/*		li.textContent = `${properties}: ${human[properties]}`;
		fragment.appendChild(li);*/

		if (properties === 'name') {
			li.textContent = `My ${properties} is ${human[properties]}`;
			fragment.appendChild(li);
		} else if (properties === 'lastName') {
			li.textContent = `My ${properties} is ${human[properties]}`;
			fragment.appendChild(li);
		} else if (properties === 'age') {
			li.textContent = `My ${properties} is ${human[properties]}`;
			fragment.appendChild(li);
		} else if (properties === 'birthDate') {
			li.textContent = `My ${properties} is ${human[properties]}`;
			fragment.appendChild(li);
		} else if (properties === 'dog') {
			li.textContent = `I have a ${properties}: ${human[properties] ? 'Yes' : 'No'}`;
			fragment.appendChild(li);
		}

	}
	return fragment;
}

function hideInfo() {
	const ol = document.querySelector('#idOl');
	ol.remove();
	count--;
}