<?php
require 'database.php';

echo '<head>
    <script type="module" src="js-sha256.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <p>
        This hsould print users lul <br>';


foreach(getFromTable('*', 'user') as $row) {
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
        <button type="button" onclick="login()">Login</button>
    </p>
    <p>
        Register : <br>
        Username : <input type="text" name="username" id="username-register"><br>
        Password : <input type="password" name="password" id="password-register"><br>
        Password confirmation : <input type="password" name="passwordconfirm" id="passwordconfirm"><br>
        <button type="button" onclick="register()">Register</button>
    </p>
</body>';
?>
