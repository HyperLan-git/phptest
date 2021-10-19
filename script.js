function printAllVars(obj) {
	let result = "";
	for(name in obj)
		result += name + ", ";
	return result;
}

login = function() {
	let user = document.getElementById('username'),
		pswrd = document.getElementById('password');

	var formData = new FormData();
	formData.append('username', user.value);
	formData.append('passwordhash', sha256(pswrd.value));
	formData.append('hashtype', 'SHA-256');
	const options = {
		method: 'POST',
		body: formData
	};
	fetch('login.php', options)
    .then(response => response.json())
    .then(response => {
        // Do something with response.
		window.alert(response);
    });
}