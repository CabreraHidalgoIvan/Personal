/*function counter() {

	let i = 0;
/!*	this.i = 0;*!/

	return () => {
		console.log(`me ejecuto ${++i}`);
	}

}

const c = counter();
const js = counter();

c();
c();

js();*/

function sum(a,b) {
	return a+b;
}

function some(f) {
	const fn = f;

	return (a) => {
		return (b) => {
			return fn(a, b);
		}
	}}

const c = some(sum);
const c1 = c(20);
console.log(c1(5));