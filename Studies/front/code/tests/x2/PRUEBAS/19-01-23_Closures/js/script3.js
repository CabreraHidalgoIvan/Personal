const text = document.querySelector('#text');

function transform(m) {
	const modes = m;
	let i = 0;

	return () => {
		if(i < modes.length) {
			modes[i++]();
		} else {
			i = 0;
			modes[i++]();
		}
	}
}

const levels = [
	() => text.textContent = 'Soy el nivel 1',
	() => text.textContent = 'Soy el nivel 2',
	() => text.textContent = 'Soy el nivel 3',
	() => text.textContent = 'Soy el nivel 4',
	() => text.textContent = 'Soy el nivel 5',
	() => text.textContent = 'Soy el nivel 6',
];

const game = transform(levels);

game();

const trans = document.querySelector('#btnTrans');
trans.addEventListener('click', () => {
	game();
});