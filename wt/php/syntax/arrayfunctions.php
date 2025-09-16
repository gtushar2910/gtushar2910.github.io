<?php 

$colors = array("red","green","blue","yellow"); 
echo "--------------Original Array Contents------------<br>";
foreach ($colors as $value)
 {
    echo "$value <br>";
 }

echo "<br>------------- Adding two values at the beginning -------<br> ";
array_unshift($colors, "black", "gold");
foreach ($colors as $value)
  {
      echo "$value <br>";
  }

echo "<br>------------- Adding two values at the end -------<br> ";
array_push($colors, "purple", "amber");
foreach ($colors as $value)
  {
      echo "$value <br>";
  }

echo "<br>------------- Removing an item from the front -------<br> ";
array_shift($colors);
foreach ($colors as $value)
  {
      echo "$value <br>";
  }

echo "<br>------------- Removing an item from the end -------<br> ";
array_pop($colors);
foreach ($colors as $value)
  {
      echo "$value <br>";
  }

echo "<br>------------- Sorting an Array -------<br> ";
sort($colors);
foreach ($colors as $value)
  {
      echo "$value <br>";
  }
echo "<br>------------- Shuffling an Array -------<br> ";
shuffle($colors);
foreach ($colors as $value)
  {
      echo "$value <br>";
  }

echo "<br>------------- Joining two Arrays -------<br> ";
$temp=array_merge($colors,$colors);
foreach ($temp as $value)
  {
      echo "$value <br>";
  }

echo "<br>------------- Slicing an Array -------<br> ";
$temp=array_slice($colors,2,4);
foreach ($temp as $value)
  {
      echo "$value <br>";
  }

$mydata = array('name'=>"ABC", 'age'=>28, 'occupation'=>"writer");
echo "<br>------------- Storing Key-Value Pairs in an Array -------<br> ";
echo("my name is: " .$mydata['name']. " <br>my age is: " .$mydata['age']);

?>  