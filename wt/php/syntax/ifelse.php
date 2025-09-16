<?php
$t=date("H");
if ($t<"10")
  {
  echo "Have a good morning!";
  }
elseif ($t<"20")
  {
  echo "Have a good day!";
  }
else
  {
  echo "Have a good night!";
  }

print("<BR>");
$Today=date("l F d, Y");
print("Today is: " .$Today);
print("<BR>");

/* 
Get this year's leap year status!
*/

$Today=date("L");

if($Today == 1)
{
    print("This year is a leap year.");
}
else
{
    print("This year is not a leap year.");    
}
?>