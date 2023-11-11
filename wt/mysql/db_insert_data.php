<?php
$connect = mysqli_connect("localhost","root","","people");
$id=3;
$name='xyz2';
$email='xyz2@abc.com';
    // make up the query
    $query = "insert into contact(pid, pname, pemail) values ($id, \"$name\", \"$email\")";
    if ($connect->query($query) === TRUE) {
        echo "Record Inserted successfully";
    } else {
        echo "\nError inserting record: " . $conn->error;
    }
?>
