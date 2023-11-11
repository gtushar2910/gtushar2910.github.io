<?php
$con=mysqli_connect("localhost","root","","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM person");

while($row = mysqli_fetch_array($result))
  {
  echo $row['fname'] . " " . $row['lname'];
  echo "<br>";
  }

mysqli_close($con);
?>

