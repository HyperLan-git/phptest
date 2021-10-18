<?php
    echo '<head>
        <script src="./script.js"></script>
    </head>
    <body>
        <p>
            This hsould print users lul <br>';
    $conn = new PDO("mysql:host=localhost;dbname=mysql","root","tesmoche");
    $sql =  "SELECT * FROM user";
    foreach  ($conn->query($sql) as $row) {
        echo "<br>" . $row['User'];
    }
    echo '<br>
        </p>
        <form action="form.php" method="get">
            Name: <input type="text" name="name"><br>
            <input type="submit">
        </form><br>
        <p>
            Login : <br>
            Username : <input type="text" name="username" id="username"><br>
            Password : <input type="password" name="password" id="password"><br>
            <button type="button" onclick="login()"></button>
        </p>
    </body>';
?>
