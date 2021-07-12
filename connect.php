<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("Could not connect to" . mysqli_connect_error());
    }

    $sql = "CREATE TABLE login(
        id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(200) NOT NULL,
        password VARCHAR(200) NOT NULL,
        email VARCHAR(200),
        phone INT(20)
        )";    

?>
