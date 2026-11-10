<?php
$config = mysqli_connect('localhost', 'root', '', 'review', 3307);

if (mysqli_connect_errno() !== 0) {
    die('Error: Could not connect to the database. ' . mysqli_connect_error());
}

mysqli_set_charset($config, 'utf8');
?>
