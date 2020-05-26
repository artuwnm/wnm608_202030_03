// Promise ( aynschronous code )
const getData = (options) => {
	return fetch('../data/api.php',{
		method:'POST',
		body:JSON.stringify(options),
		headers:{'Content-Type':'application/json'}
	}).then(r=>r.json());
}


// Currying
const templater = f => a =>
	(Array.isArray(a)?a:[a])
	.reduce((r,o,i,a)=>r+f(o,i,a),'');