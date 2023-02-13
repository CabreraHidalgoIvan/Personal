//Ejemplo de javascriptconst text = document.querySelector('#text');

(function calc(fn) {

	let operation = 0;

	function increment() {
		operation++;
	}

	function decrement() {
		operation--;
	}

	function showOperation() {
		console.log(operation);
	}

		if (fn === 'increment') {
			return increment();
		} else if (fn === 'decrement') {
			return decrement();
		} else if (fn === 'showOperation') {
			return showOperation();
		}


}('showOperation'))