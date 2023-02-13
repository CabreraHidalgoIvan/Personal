class dog {
	name;
	age;
	weight;
	owner;
	distance;

	constructor(name, age, weight, owner) {
		this.name = name;
		this.age = age;
		this.weight = weight;
		this.owner = owner;
		this.distance = 0;
	}

	bark() {
		console.log("Woff Woff");
	}

	run() {
		this.distance += 0.5;
		this.weight -= 0.1;
	}

	feed() {
		this.weight += 0.2;
	}
}

/*let dog1 = new dog("Toby", 5, 10, "Juan");*/

((dogName, nameOfDog, weight, own) => {
	dogName = new dog(nameOfDog, 5, weight, own);
	/*	console.log(dogName);*/

	for (let properties of Object.keys(dogName)) {
		if (properties !== "weight") {
			console.log(dogName[properties]);
		} else {
			if (dogName["weight"] === 1) {
				console.log("The dog will die if he runs one more step");
				dogName.bark();
				let answer = prompt("Do you want to run with your dog? (yes/no)");
				if (answer !== "yes") {
					console.log("Your dog is alive");
					console.log(`Keep playing - Distance traveled: ${dogName.distance} km`);
					let answer2 = prompt("Do you want to feed your dog? (yes/no)");
					if (answer2 === "yes") {
						dogName.feed();
						console.log(`Your dog is now ${dogName.weight} kg`);
						continue;
					}
				} else {
					dogName.run();
					console.log("Your dog died");
					console.log(`Game Over - Distance traveled: ${dogName.distance} km`);
					break;
				}
			} else if (dogName["weight"] > 20) {
				console.log("Your dog is overweight, he should run more");
				dogName.run();
			} else {
				console.log("Your dog is healthy");
				dogName.run();
			}
		}
	}
	;
})("firstDog", "Odin", 1, "Juan");
