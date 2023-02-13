let textArea = document.querySelector(`[id = "text"]`);
const MAX_LENGTH = 10;
const paragraph = document.querySelector(`[id = "paragraph"]`);

window.addEventListener('DOMContentLoaded', function () {

textArea.addEventListener('keydown', function(e) {

	(textArea.value.length < MAX_LENGTH || e.key.charAt(0) === 'A' || e.key.charAt(0) === 'B' || e.key.charAt(0) === 'D') ?
		paragraph.textContent = `You have ${MAX_LENGTH - textArea.value.length} words left` :
		(paragraph.textContent = `You have ${MAX_LENGTH - textArea.value.length} words left`, e.preventDefault());

	console.log(textArea.value.length);
	console.log(e.key.charAt(0))

})

})