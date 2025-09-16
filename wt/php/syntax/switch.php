<?php

$diarydate= date("d");

switch ($diarydate)
{
case 3:
      echo "You have a dinner date.";
      break;
case 10:
      echo "Dentist appoinment";
      break;
case 19:
      echo "Have the day off.";
      break;
default:
      echo "You have no booked events today!";
}
?>