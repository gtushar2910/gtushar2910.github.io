<?php
$connect = mysqli_connect("localhost","root","","people");
$sql = "select * from contact where pid = 1";
    $result = $connect->query($sql);

    while($row = mysqli_fetch_array($result))
    {
	echo($row["pid"]."-".$row["pname"]."-".$row["pemail"]);
    echo("<br>");
    }
?>
