<?php
    $str1 = "This is SCET Surat";
    $str2 = "SCET";

    print "Str1 : $str1 <br>";
    print "Str2 : $str2 <br><br>";

    print "String as Array: <br>";
    print "Str1 at index 3 : $str1[3]";
    print "<br> Str2 at index 1: $str2[1]";

    $l = strlen($str1);
    print "<br><br> Length of Str1 is: $l";

    $strfind = strstr($str1, $str2);
    print "<br><br> Finding Str2 in Str1 using strstr: $strfind";

    $strfind1 = strpos($str1, $str2);
    print "<br><br> Finding Str2 in Str1 using strpos: $strfind1";

    print "<br><br>Str1 : $str1";

    $sub1 = substr($str1, 4, 9);
    print "<br><br> Finding Substring from Str1 at index (4,9): $sub1";

    $str3 = "Information Engineering";
    $str4 = "Technology";

    $rep = substr_replace($str3, $str4, 12);
    print "<br><br> Replacing a substring: $rep";

    $upper =  strtoupper($str3);
    print "<br><br> Converting into upper case: $upper";

    $str6 = explode(" ", $str1);
    print "<br><br>Breaking string into Array: Array at index 0 : $str6[0]";
    print "<br><br>Breaking string into Array: Array at index 1 : $str6[1]";            
    print "<br><br>Breaking string into Array: Array at index 2 : $str6[2]";            
    print "<br><br>Breaking string into Array: Array at index 3 : $str6[3]";    
    
    $str7 = $str6[2];
    print "<br><br>$str7[1]";
?>