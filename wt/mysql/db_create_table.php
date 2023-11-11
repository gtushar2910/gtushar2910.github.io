<?php
$connect = mysqli_connect("localhost","root","");
// create a database
        $query = 'create database people';
        if ($connect->query($query) === TRUE) {
            echo "Database people created successfully";
          } else {
            echo "Error creating database: " . $conn->error;
          }
    // select the database
    $connect = mysqli_connect("localhost","root","","people");
    if ($connect->connect_error) {
      die("Connection failed: " . $connect->connect_error);
    }
    // make up the query
    $query = 'create table contact('.
            'pid INT NOT NULL AUTO_INCREMENT, '.
            'pname VARCHAR(25) NOT NULL, '.
            'pemail VARCHAR(54) NOT NULL, '.
                             'PRIMARY KEY(pid))';
    if ($connect->query($query) === TRUE) {
        echo "\nDatabase Table Contact created successfully";
    } else {
        echo "\nError creating table: " . $conn->error;
    }
?>
