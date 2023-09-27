<?php
$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName']. " " . $row['Age'];
  echo "<br>";
  }

mysqli_close($con);
?>

