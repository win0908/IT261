<?php
// date function and if statement

echo date("Y");
echo "<br>";
echo date("l, F j, Y h:i A");

echo "<br>";
date_default_timezone_set("America/Los_Angeles");

echo "<br>";
echo date("l, F j, Y h:i A");



echo "<br>";
$name = "Supawin";
$our_time = date("H:i A");

echo "<br>";
echo $our_time;

// The logic brhind this is, If the time is less or equal to 11, then it is morning
// If the time is less or equal to 17, which 5, then it is afternoon
// now we will have an else, then will mean it is evening!


if($our_time <= 11) {
    echo 
    '<h2 style="color:#FFDE57;">Good Morning,   '.$name.' </h2> 
    <img src="/it261/images/morning.png"  alt="image" width="500">  
    <p>It is time to get up!</p>';

} elseif($our_time <= 17) {
    echo 
    '<h2 style="color:#57BAFF;">Good Afternoon, '.$name.' </h2>
    <img src="/it261/images/afternoon.png"  alt="image" width="500">  
    <p>It is time to work!</p>';

} else {
    echo 
    '<h2 style="color:#2C1D68;">Good Evening,   '.$name.' </h2>
    <img src="/it261/images/evening.png"  alt="image" width="500">  
    <p>It is time to sleep!</p>';


}
