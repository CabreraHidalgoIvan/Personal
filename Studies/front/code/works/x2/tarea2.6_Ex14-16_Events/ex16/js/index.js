window.addEventListener("DOMContentLoaded", ()=>{
	window.addEventListener("mousemove", (e)=>{
		const spanCoordenadasPagina = document.querySelector("#posPagina");

		const maxHeight = document.documentElement.clientHeight;

		if (e.pageX <= maxHeight && e.pageY <= maxHeight / 2) {
			spanCoordenadasPagina.textContent = `"Arriba", "Izquierda"`;

		} else if (e.pageX > maxHeight && e.pageY <= maxHeight / 2) {
			spanCoordenadasPagina.textContent = `"Arriba", "Derecha"`;

		} else if (e.pageX < maxHeight && e.pageX < maxHeight / 2) {
			spanCoordenadasPagina.textContent = `"Abajo", "Izquierda"`;

		} else if (e.pageX > maxHeight && e.pageX > maxHeight / 2) {
			spanCoordenadasPagina.textContent = `"Abajo", "Derecha"`;
		}
	});
});