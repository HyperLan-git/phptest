<?php
    echo 'This hsould print users\n';
    $conn = new PDO("mysql:host=localhost;dbname=","root","tesmoche");
    $sql =  'SELECT * FROM \'user\'';
    foreach  ($conn->query($sql) as $row) {
        print $row['User'];
    }
?>








