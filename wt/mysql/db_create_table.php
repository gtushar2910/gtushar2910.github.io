<?php
$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table Persons created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>