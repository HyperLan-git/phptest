<?php
function getFromTable($col, $tablename) {
    $conn = new PDO("mysql:host=localhost;dbname=mysql", "root", "tesmoche");
    $sql = 'SELECT ' . $col . ' FROM ' . $tablename;
    return $conn->query($sql);
}

function registerUser($username, $passwordhash, $hashtype) {
	$conn = new PDO("mysql:host=localhost;dbname=testdb", "root", "tesmoche");
	$sql = 'INSERT INTO `pma__users` (`ID`, `username`, `passwordhash`, `hashtype`) VALUES (' .
		'NULL, ' . $username . ', ' . $passwordhash . ', ' . $hashtype . ')';
	return $conn->query($sql);
}

function getUser($username) {
	$conn = new PDO("mysql:host=localhost;dbname=testdb", "root", "tesmoche");
	$sql = 'SELECT * from `pma__users` WHERE `username` = ' . $username;
	return $conn->query($sql);
}
?>