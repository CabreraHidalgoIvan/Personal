const $divsEvents = document.querySelectorAll(".bubblingEvents div");

function bubblingEvents(event) {
	console.log(`bubbling div ${this.className}, el click lo originó ${event.target.className}`);
}

$divsEvents.forEach(div => {
	// Bubbling
/*	div.addEventListener('click', bubblingEvents, false)*/
	// Capture events
	div.addEventListener('click', bubblingEvents, true )

/*	div.addEventListener('click', bubblingEvents, {
		capture: false,
		once: true
	} )*/
})