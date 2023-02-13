const list = document.querySelector('.listado');

const players = document.querySelectorAll('.equipo > ul > li');
const teams = document.querySelectorAll('.liga > ul > li');
const league = document.querySelectorAll('.liga');

console.log(players);
console.log(teams);
console.log(league);

function bubbling(event) {
	console.log(`${this.textContent} - ${event.target.textContent}`);
}




for (const player of players) {

			player.addEventListener('click', (e) => {

				e.stopPropagation();
				bubbling(e);
			}, false);

}