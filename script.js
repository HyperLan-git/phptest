function printAllVars(obj) {
	let result = "";
	for(name in obj)
		result += name + ", ";
	return result;
}

function login() {
	let user = document.getElementById('username'),
		pswrd = document.getElementById('password');

	const params = {
		username: user.value,
		passwordhash: sha256(pswrd.value),
		hashtype: 'SHA-256'
	};
	const options = {
		method: 'POST',
		body: JSON.stringify(params)
	};
	fetch('login.php', options)
    .then(response => response.json())
    .then(response => {
        // Do something with response.
		window.alert(printAllVars(response));
    });
}