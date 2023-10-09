<?php
$connect = mysqli_connect("localhost","root","","people");


$query = "UPDATE contact SET pname='abc' WHERE pid=2 ";

if ($connect->query($query) === TRUE) {
    echo "Record Updated successfully";
} else {
    echo "\nError updating record: " . $conn->error;
}
?>
