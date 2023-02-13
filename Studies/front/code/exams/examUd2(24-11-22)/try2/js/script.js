const array = ["hola", 2, true, undefined, null, NaN, 1, false, 4, "adios"];
const types = {};

for (const property in array) {
	let prop = array[property];
	types[prop] = typeof array[property];
}

for (const typesKey in types) {
	console.log(`The type of ${typesKey} is '${types[typesKey]}'`);
}

const copyArray = [...array];

// Exercise 2
const arrayLotteryPlayers = [];
const element = document.querySelector("#info");


const defaultHuman = {
	name: 'Wilfred',
	lastName: 'Romualdo',
	lastName2: 'González',
	age: '1000'
}

const human = {name: 'Ivan', lastName: 'Cabrera', lastName2: 'Hidalgo', age: '22', lottery: 123456789}
const human2 = {name: 'Ivan', lastName: 'Cabrera', lastName2: 'Hidalgo', age: '22'}
const human3 = {name: 'Ivan', lastName: 'Cabrera', lastName2: 'Hidalgo'}
const human4 = {name: 'Ivan', lastName: 'Cabrera', age: '22'}

function createHuman(name, age) {

}


function randomNumber() {
	return Math.floor(Math.random() * 999999)
}
function lotteryPlayer(player) {
	const defaultCopy = {...defaultHuman};
	const lotteryPlayer = {...defaultCopy, ...player};

	lotteryPlayer.lottery ??= randomNumber();

	arrayLotteryPlayers.push(lotteryPlayer);

	return lotteryPlayer;
}

lotteryPlayer(human);
lotteryPlayer(human2);
lotteryPlayer(human3);
lotteryPlayer(human4);

for (const index in arrayLotteryPlayers) {

	for (const indexKey in arrayLotteryPlayers[index]) {
		const arr = arrayLotteryPlayers[index];
		console.log(indexKey, arr[indexKey]);
	}
	console.log(arrayLotteryPlayers[index]);
}

/*
function createFragment(string, tag) {
	const fragment = new DocumentFragment();
	const li = document.createElement('li');

	li.textContent = string;
	fragment.appendChild(li);

	tag.appendChild(fragment);
}*/
