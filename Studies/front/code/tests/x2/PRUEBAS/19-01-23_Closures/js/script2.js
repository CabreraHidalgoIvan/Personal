const beers = [
	{ name: 'Stout',
		brand: 'Minerva'},

	{ name: 'Porter',
		brand: 'Fuller'},

	{ name: 'IPA',
		brand: 'Lagunitas'},

	{ name: 'La Verde',
		brand: 'Embraü'},

	{ name: 'La Roja',
		brand: 'Embraü'},

	{ name: 'La Blanca',
		brand: 'Embraü'},

	{ name: 'La Negra',
		brand: 'Embraü'},

	{ name: 'La Azul',
		brand: 'Embraü'}

];

function load(d, r, f) {

	const data = d;
	let i = 0;
	let regitros = r;
	const fn = f;

	return () => {
		if(i >= data.length) return;

		const arr = [];

		for(let j = 0; j < regitros && i < data.length; j++) {
			arr.push(data[i++]);
		}

		fn(arr);
	}

}

const myBeers = document.querySelector('#myBeers');
const btnLoad = document.querySelector('#btnLoad');


const showData = load(beers, 1, (arr) => {

	myBeers.innerHTML += arr.reduce((ac, e) => {
		return ac + `<div>
			<h2>${e.name}</h2>
			<p>${e.brand}</p>
</div>`
	}, '')

});

const showData2 = load(beers, 1, (arr) => {

	console.log(arr);

});

btnLoad.addEventListener('click', () => {
	showData();
	showData2();
})