var person = Object.create(null);

Object.defineProperty(person, 'firstName', {

	value: "Yehuda",
	writable: true,
	enumerable: true,
	configurable: true
});

Object.defineProperty(person, 'lastName', {
	value: "Katz",
	writable: true,
	enumerable: true,
  	configurable: true

});

