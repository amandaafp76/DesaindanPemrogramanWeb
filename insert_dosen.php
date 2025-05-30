<?php
$con = new mysqli(hostname: "127.0.0.1:3308", username: "root", password: "", database: "modul11");
//check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHP) VALUES (10, 'Rahmat Dwi Prasetyo', 'rahmat@example.com')";

$hasil=$con->query(query: $sql);

if ($hasil === TRUE){
    echo "Mengisi database";
}else{
    echo "error" . $con->error;
}

$con->close();
?>