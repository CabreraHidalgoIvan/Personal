window.addEventListener('DOMContentLoaded', () => {

	showInfo();

	window.addEventListener('mousemove', (e) => {
		info([e.clientX, e.clientY, e.pageX, e.pageY]);
	})

	window.addEventListener('keydown', (e) => {
		info([e.key, e.key.charCodeAt(0)])
	})

	window.addEventListener('click', (e) => {
		info([e.clientX, e.clientY, e.pageX, e.pageY]);
	})

});

function showInfo() {
	const template = document.querySelector('#template');
	const clone = template.content.cloneNode(true);
	document.body.appendChild(clone);
}

function info(array) {
	const span = document.querySelectorAll('span');

	span.forEach(info => {
		info.textContent = array.shift();
	});
}

