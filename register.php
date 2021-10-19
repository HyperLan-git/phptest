<?php
require 'database.php';
require 'utils.php';

$user = $_POST['username'];
$hashtype = $_POST['hashtype'];
$pwd = $_POST['passwordhash'];
if(!array_search($hashtype, SUPPORTED_HASHES)) {
	echo 'Unsupported or insecure hash method';
	http_response_code(400);
	exit;
}

if(!check_hash($hashtype, $pwd)) {
	echo 'Invalid hash !';
	http_response_code(400);
	exit;
}

echo registerUser($user, $pwd, $hashtype);

http_response_code(201);
?>