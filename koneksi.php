<?php
$con = new mysqli(hostname: "127.0.0.1:3308", username: "root", password: "", database: "modul11");
//check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}