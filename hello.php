<?php
    echo 'This hsould print users lul <br>';
    $conn = new PDO("mysql:host=localhost;dbname=mysql","root","tesmoche");
    $sql =  "SELECT * FROM user";
    foreach  ($conn->query($sql) as $row) {
        echo "<br>" . $row['User'];
    }
    echo '<br>
        <form action="form.php" method="get">
            Name: <input type="text" name="name"><br>
            <input type="submit">
        </form>'
?>
