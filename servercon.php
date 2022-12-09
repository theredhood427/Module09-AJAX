<?php

$dbconnect = mysqli_connect('localhost', 'pdc20user', '12345678', 'pdc20');
if (mysqli_connect_error()){
    echo "Failed to connect to MySQL" . mysqli_connect_error();
    die();
}

?>