// Exercise 1
const arr = [1, 2, 3, 4, 5, "a", "b", "c", "d", "e"];
let sum = 1;

arr.forEach(element => {
	console.log(element);
	console.log(typeof element);
	if (typeof element == "number") {
		sum *= element;
	}
})

console.log(`The result of the integers array sum is ${sum}`);

// Exercise 2

const h2 = document.querySelector('#text')
const p = document.querySelector('#p');

h2.addEventListener('click', () => {
	if (count === 0) {
		exercise3();
	} else {
		const fragmentP = new DocumentFragment();
		const paragraph = document.createElement('p');
		paragraph.textContent = 'ERROR: Ya se ha mostrado la información';
		fragmentP.appendChild(paragraph);

		p.appendChild(paragraph);
	}
})

// Exercise 3
let count = 0;
const ol = document.querySelector('ol');
const human = {
	name: 'Ivan', lasName: 'Cabrera', city: 'Cordoba', studentNumber: '1', school: 'Gran Capitán'
}

function exercise3() {
	for (const property in human) {
		createFragment(`The property ${property} is ${human[property]}`, ol);
	}

	function createFragment(string, tag) {
		const fragment = new DocumentFragment();


		const li = document.createElement('li');
		li.textContent = string;
		fragment.appendChild(li);

		tag.appendChild(fragment);
	}

	count++;
}
