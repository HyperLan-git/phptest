<?php
require 'database.php'
require 'utils.php'
const var supported_hashes = {"SHA-256"};
$user = $_POST['username'];
$hashtype = $_POST['hashtype'];
$pwd = $_POST['passwordhash'];
if(!array_search($hashtype, supported_hashes)) {
	http_response_code(400);
	echo 'Unsupported or insecure hash method';
	exit;
}

if(!check_hash($hashtype, $pwd)) {
	http_response_code(400);
	echo 'Invalid hash !';
	exit;
}

echo registerUser($user, $pwd, $hashtype);

http_response_code(201);
?>