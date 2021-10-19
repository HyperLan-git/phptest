<?php
    echo json_encode("POST : <br>name : " . $_POST['username'] .
        "<br>hashtype : " . $_POST['hashtype'] .
        "<br>hash : " . $_POST['passwordhash']);
?>