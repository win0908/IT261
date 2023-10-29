<?php

echo '<h3> First example of "a",<br> ergo, it is FALSE, NOT NULL </h3>';
$a = 0;
echo "a is " . is_null($a) . "<br>";


echo '<h3> Second example of "b",<br> echping "1" - what does that mean? 1 equals TRUE </h3>';
$b = null;
echo "b is " . is_null($b) . "<br>";


echo '<h3> Third example of "c",<br> ergo, c is NOT NULL </h3>';
$c = "null";
echo "c is " . is_null($c) . "<br>";


echo '<h3> Fourth example of "d",<br> therefore "d" is NULL! </h3>';
$d = NULL;
echo "d is " . is_null($d) . "<br>";


?>