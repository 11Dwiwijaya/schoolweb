<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "smkn2kra";

$connect = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($connect));
