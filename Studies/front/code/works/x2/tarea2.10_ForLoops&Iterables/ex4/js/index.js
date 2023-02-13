const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

const cat = {
	name: 'Garfield',
	age: 3,
	weight: 6
};

const days = new Array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

for (const month in months) {
	console.log(`${months[month]} is month number ${parseInt(month) + 1}`);
}

for (const day in days) {
	console.log(`${days[day]} is day number ${parseInt(day) + 1}`);
}

for (const property in cat) {
	console.log(`${property}: ${cat[property]}`);
}