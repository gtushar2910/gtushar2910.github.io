<?php
$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query = "SELECT * FROM Persons WHERE FirstName='Peter'";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br>";
  }
?>