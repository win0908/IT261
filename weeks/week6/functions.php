<?php
// our function page

function sayHello() {
    echo 'Hello PHP FUNCTION!!!';
}


sayHello();

echo '<h2> Arithmetic problem - cube</h2>';

function cube($num) {
    $cubing = $num * $num;
    echo $cubing;
}
cube(5);


echo '<h2> Area - width * height </h2>';
function area($w, $l) {
    $get_area = $w * $l;
    return $get_area;
}
$get_area = area(5,12);
echo $get_area;


echo '<h2> Celcius Converter </h2>';
function celcius_converter($cel) {
    $far = ($cel * 9/5) + 32;
    echo $far;
}
celcius_converter(100);


echo '<h2> Area and Valume in array</h2>';
function area_valume($a, $b, $c) {
    $area = $a * $b;
    $valume = $a * $b * $c;
    return array($area,$valume);
}

$my_array = area_valume( 10, 5, 20);
echo '<b> This is my area:</b>   '.$my_array[0].'  <br>';
echo '<b> This is my valume:</b> '.$my_array[1].'  <br>';



echo '<h2> List Function! </h2>';
function area_valume2($a, $b, $c) {
    $area = $a * $b;
    $valume = $a * $b * $c;
    return array($area,$valume);
}
list($area,$valume) = area_valume2( 10, 5, 30);
echo '<b> This is my area:</b>   '.$area.'  <br>';
echo '<b> This is my valume:</b> '.$valume.'  <br>';




echo '<h2> Our Navigation! </h2>';
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {

    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href=" '.$key.' "> '.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href=" '.$key.' "> '.$value.'</a></li>';
        }

    } //end for-each
    return $my_return;
} //end function

echo '<h2> Our Navigation created with a function </h2>';
echo make_links($nav);






echo '<h2> The implode function </h2>';
$cars = array('toyota','ford','suburu','audi','bmw','mercedes','lexus');
$my_cars = implode(', ',$cars);
echo $my_cars;

