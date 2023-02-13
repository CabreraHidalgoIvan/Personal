// Create data structure
const date = new Date();
const arr = [];
const human = {
	name: 'Ivan',
	lastName: 'Cabrera',
};
const n = 2n ** 3n;
const data = [1, n,  undefined, NaN, "string", 2, false, date, arr, null, human]

// Explore the data of the array, classifying each element into PRIMITIVE or OBJECT
data.forEach(element => {
	const text = document.querySelector("#info");
	console.log(typeof element);
	const type = typeof(element);
	console.log(element instanceof Object);

	(!(element instanceof Object)) ?
		createFragment(`PRIMITIVE: - ${type} - ${element}`, text) :
		createFragment(`OBJECT: - (true) - ${element.constructor.name} - ${element}`, text);
});

// Function that creates a fragment with a message
function createFragment(string, tag) {
	const fragment = new DocumentFragment();

	const li = document.createElement('li');
	li.textContent = string;
	fragment.appendChild(li);

	tag.appendChild(li);
}