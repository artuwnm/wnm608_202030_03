

// Promise ( aynschronous code )
const getData = (options) => {
	return fetch('data/api.php',{
		method:'POST',
		body:JSON.stringify(options),
		headers:{'Content-Type':'application/json'}
	}).then(r=>r.json());
}