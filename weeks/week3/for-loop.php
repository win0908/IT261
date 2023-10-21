<?php

// !!! This file will demonstrate for loops and in addition to placing your php inside your HTML !!!
// The for loop - Loops through a block of code a specified number of times.
// for (init counter; test counter; increment counter) { code to be executed for each iteration; }

// Celcius and Fahrenheit

// far = ($celcius * 9/5) +32;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My Celcius Table </title>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    table {
        width: 500px;
        margin: 20px auto;
        border-collapse:collapse ;
        border: 1px solid lightblue;
    }

    td, th {
        text-align: center;
        border: 1px solid lightblue;
        border-collapse:collapse ;
        padding: 5px;
    }

    h1, h2 {
        text-align: center;
        margin: 10px 0;
        color: green;
    }

    </style>

</head>
<body>
    
<!--  Celcius and Fahrenheit      -->
<!--  far = ($celcius * 9/5) +32; -->
<h1> My Celcius / Fahrenheit Table! </h1>

<table>
    <tr>
        <th> Celcius    </th>
        <th> Fahrenheit </th>
    </tr>
    <?php 
    for($cel = 0; $cel <= 100; $cel+= 3){
        $far = ($cel * 9/5) +32;
        echo '<tr>';
        echo '<td>  '.$cel.' degrees </td>';
        echo '<td>  '.$far.' degrees </td>';
        echo '</tr>';
    }
    ?>
</table>

<!--  Kilometer and Mileage   -->
<!--  mi = km * 0.62137119; -->
<h2> My Kilometer / Mileage Table! </h2>

<table>
    <tr>
        <th> Kilometer </th>
        <th> Mileage   </th>
    </tr>
    <?php 
    for($km = 0; $km <= 100; $km+= 3){
        $mi = ($km * 9/5) +32;
        echo '<tr>';
        echo '<td>  '.$km.' km </td>';
        echo '<td>  '.$mi.' mi </td>';
        echo '</tr>';
    }
    ?>
</table>


</body>
</html>




