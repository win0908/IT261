<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celcius Document</title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<h1>Celcius Form Converter</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
    <fieldset>
    
    <label> Enter your celcius value</label>
    <input type="number" name="cel">
    
    
    <input type="submit" value="Convert it">

    </fieldset>
</form>
<p><a href=""> RESET </a></p>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['cel'])){

        $cel = $_POST['cel'];
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) +32;

        //If user does not enter a value, say something
        if($cel == null){
            echo '<p class="error"> Please fill out the Celcius Value! </p>';
        } elseif($far <= 32) {
            echo '<p> '.$cel_int.' degrees selcius equals '.$far.' degrees fahrenheit <br>
            it is pretty cold out there! </p>';
        } elseif($far <= 45) {
            echo '<p> '.$cel_int.' degrees selcius equals '.$far.' degrees fahrenheit <br>
            it is getting warmer! </p>';
        } elseif($far <= 60) {
            echo '<p> '.$cel_int.' degrees selcius equals '.$far.' degrees fahrenheit <br>
            it is sweater weather! </p>';
        } elseif($far <= 75) {
            echo '<p> '.$cel_int.' degrees selcius equals '.$far.' degrees fahrenheit <br>
            We\'re going to the park! </p>';
        } elseif($far <= 90) {
            echo '<p> '.$cel_int.' degrees selcius equals '.$far.' degrees fahrenheit <br>
            We may be going to the beach! </p>';
        } else {
            echo '<p> '.$cel_int.' degrees selcius equals '.$far.' degrees fahrenheit <br>
            We are at the beach! </p>';
        }

    }
} //end post



?> 

    
</body>
</html>