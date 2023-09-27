<?php
$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query1="INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)";
mysqli_query($con,$query1);


$query2="INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire',33)";
mysqli_query($con,$query2);

mysqli_close($con);
?>