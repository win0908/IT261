<?php
echo '<a href="http://www.win0908.me/it261/index.php"> Home </a><br>';
echo '<a href="https://github.com/win0908/it261/blob/main/weeks/week2/var2.php"> Code </a><br>';

// concatenation
// operators - assignment operators
// some preset functions
// arrays


$name  = "Supawin";
$name .= "Soongsawang";
echo "<br>";
echo $name;


$color = "orange";
echo "<br>";
echo  "Supawin's favorite color is $color <br>";
echo  'Supawin\'s favorite color is '.$color.' <br>';


//
$x = 20;
$y = 5;
echo "<br>";
echo "x:$x   y:$y <br>";

$z = $x + $y;
echo " x + y = $z <br>";

$x = 20;
$x += 5;
echo "x = 20 <br>";
echo " x+=5  -->  $x <br>";

$x = 100;
$x /= 10;
echo "x = 100 <br>";
echo " x/=10  -->  $x <br>";



echo "<h3> Our product, quantity and tax exercise </h3>";
$product = 120;
$quantity =  5;
$total = $product * $quantity;
$total *= 1.097;

echo "product  = $product  <br>";
echo "quantity = $quantity <br>";
echo "total = (product * quantity) * 1.097 <br>";
echo "total = $total <br>";


echo "<h3> We would like our amount to reflect 2 decimal places --- we are thinking about floats and a new function - number_format() </h3>";
$total_friendly = number_format($total,2);
echo "We have a total of <b>\$$total_friendly</b> dollars <br>";
echo "We have a total of <b>\$number_format($total,2)</b> dollars <br>";


echo "<h3> Our second preset function is our date function! </h3>";
echo date("Y");
echo "<br>";
echo date("l");

echo "<br>";
echo date("l jS \of F Y h:i:s A");
date_default_timezone_set('America/Los_Angeles');
echo "<br>";
echo date("l jS \of F Y h:i:s A");




echo "<h3> Time for an array! </h3>";
$fruit = [
    'bananas' ,
    'cherries',
    'melon'   ,
    'kiwi'    ,
    'oranges' ,
    'apples'
];

echo "<br>";
echo $fruit;
echo "<br>";
echo $fruit[2];

echo "<br>";
print_r($fruit);
echo "<br>";
var_dump($fruit);


echo "<h3> An associative array </h3>";

$nav = array(
    "index.php" => "Home",
    "about.php" => "About",
    "daily.php" => "Daily",
    "project.php" => "Project",
    "contact.php" => "Contact",
    "gallery.php" => "Gallery",
);

echo "<pre>";
var_dump($nav);
echo "</pre>";
