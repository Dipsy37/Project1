<?php

date-default_timezone_set("Africa/Nairobi");

echo "This is my first php code";//Displaying a sentence or a string

print "<br>"; //Using HTML's <br> to break a line

print "Today is <span style='color: #ff4856; text-transfrom: uppercase;'>Thursday</span>";

print "<br>";

print 1999; //This is an integer or digit

print "<br>";

print "5475"; //This is a string

print "<br>";


print date('1'); //Displaying the current day of the week

print "<br>";

print date ('1, F  jS Y' , strtotime('+5 months'));

print "<br>";

print "Today is ". date('1, F jS Y H:i:s');


//Creating(Declaring) variable

$fname = "Alex"; //Declaration of a variable or a string or a group of words

$yob = 1999; //Declaration of a digit or an integer

print "<br>";

print $fname;

print "<br>";

echo $yob;

print "<br>";
$current_year = date('Y');

echo $current_year;

print "<br>";

$age = $current_year - $yob;

print $fname.  "is" . $age ."years old.";

print "<br>";

print "45+96";

print "<br>";
?>
