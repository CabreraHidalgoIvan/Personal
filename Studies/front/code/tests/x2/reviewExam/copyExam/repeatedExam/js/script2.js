// ============== DATA ============== \\
const paragraph = document.querySelector('[id *= "idParagraph"]');
let count = 0;
let countKey = 0;

const vehicle = {
	name: 'Mustang',
	year: 1969,
	color: 'red',
	price: 10000,
	wheels: 4
}

const dog = {
	name: "Firulais",
	age: 18,
	breed: "Pug"
}


// ============== EVENTS ============== \\
paragraph.addEventListener('click', () => {
	if (count === 0) {
		showInfo();
	} else if (count === 1) {
		hideInfo();
	}
});

document.addEventListener('keydown', () => {

	if (countKey === 0) {
		showDog();
	} else if (countKey === 1) {
		hideDog();
	}
});

// ============== FUNCTIONS ============== \\

for (const vehicleProperty in vehicle) {
	console.log(vehicle[vehicleProperty]);
}

function showDog() {
	const template = document.querySelector('[id *= "idTemplate"]');
	const clone = template.content.cloneNode(true);
	document.body.appendChild(clone);

	const div = document.querySelector('[id *= "idDiv"]');
	div.appendChild(createParagraph());
	countKey++;

}

function showInfo() {
	const template = document.querySelector('[id *= "idTemplate"]');
	const clone = template.content.cloneNode(true);
	document.body.appendChild(clone);

	const ol = document.querySelector('[id *= "idOl"]');
	ol.appendChild(createList());

	count++;
}

function createList() {
	const fragment = new DocumentFragment();

	for (const vehicleProperty in vehicle) {
		const li = document.createElement('li');
		li.textContent = `${vehicleProperty}: ${vehicle[vehicleProperty]}`;
		fragment.appendChild(li);
	}
	return fragment;
}

function createParagraph() {
	const fragment = new DocumentFragment();

	for (const dogProperty in dog) {
		const p = document.createElement('p');
		p.textContent = `${dogProperty}: ${dog[dogProperty]}`;
		fragment.appendChild(p);
	}
	return fragment;
}

function hideInfo() {
	const ol = document.querySelector('ol');
	ol.remove();
	count--;
}

function hideDog() {
	const div = document.querySelector('div');
	div.remove();
	countKey--;
}