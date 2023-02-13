function log(h) {

	const hash = h;

	return (msg) => {
		console.log(`Log ${hash} ${msg}`);
	}
}

const l = log(crypto.randomUUID())
l('has fallado');
l('No se que hacer');