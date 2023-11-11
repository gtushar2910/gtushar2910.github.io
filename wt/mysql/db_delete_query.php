<?php
$connect = mysqli_connect("localhost","root","","people");

// To delete data from a database table
$query = 'delete from contact where pid=1';
$connect->query($query);
echo("Record Deleted with pid = 1 from contact table !!!!");

$sql = "select * from contact";
    $result = $connect->query($sql);

    while($row = mysqli_fetch_array($result))
    {
	echo($row["pid"]."-".$row["pname"]."-".$row["pemail"]);
    echo("<br>");
    }

// To delete a database
$query = 'drop database people'; 
 	
// To delete a column from a table
$query = 'alter table contact drop pemail';

// To destroy a whole table
$query = 'drop table contact';


?>
