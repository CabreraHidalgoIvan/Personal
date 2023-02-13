let text = "Valar dohaeris"

let iterator = text[Symbol.iterator]();

while (true) {
		let result = iterator.next();
		if (result.done) break;
		console.log(result.value);
}

console.log("--------------------------------------------")

for (let char of text) {
	console.log(char);
}
