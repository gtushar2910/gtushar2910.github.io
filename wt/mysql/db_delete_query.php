<?php
$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = "DELETE FROM Persons WHERE LastName='Griffin'";
mysqli_query($con, $query);

mysqli_close($con);
?>