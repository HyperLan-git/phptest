<?php
    echo 'This hsould print users lul
        ';
    $conn = new PDO("mysql:host=localhost;dbname=mysql","root","tesmoche");
    $sql =  "SELECT * FROM user";
    foreach  ($conn->query($sql) as $row) {
        echo $row['User'] . "\n.";
    }
?>
