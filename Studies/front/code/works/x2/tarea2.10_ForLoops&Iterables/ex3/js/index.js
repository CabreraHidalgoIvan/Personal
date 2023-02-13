const dog = {
	name: 'Fido',
	age: 4,
	weight: 20,
	bark: function() {
		console.log('Woof!');
	}
};

for (const property in dog) {
	console.log(dog[property]);
}