<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Travel Calculator </title>
    <link href="styles.css" type="text/css" rel="stylesheet" >
</head>
<body>

<!-- How to prevent XSS with HTML/PHP -->
<!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <label> NAME </label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>" >

    <label> Total miles driving? </label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']); ?>" >

    <label> How fast do you typically drive? </label>
    <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']); ?>" >

    <label> How many hours per day do you plan on driving? </label>
    <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']); ?>" >

    <!-- time for our radio button that has an additional attribue of VALUE -->
    <label> Price of gas </label> 
    <ul>
        <li><input type="radio" name="gas" value="3.00" 
        <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00)  echo 'checked = "checked"'; ?>> $3.00 </li>
        <li><input type="radio" name="gas" value="3.50"  
        <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.50)   echo 'checked = "checked"'; ?>> $3.50 </li>
        <li><input type="radio" name="gas" value="4.00"  
        <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.00)   echo 'checked = "checked"'; ?>> $4.00 </li>
    </ul>

    <label> Fuel efficiency </label>
    <select name='efficiency'>
        <option value=""    <?php if(isset($_POST['efficiency']) && is_null($_POST['efficiency'])) echo 'selected = "unselected"';?>> Select one! </option>
        <option value="10"  <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 10.00) echo 'selected = "selected"';?>> Terrible @ 10mpg  </option>
        <option value="20"  <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 20.00) echo 'selected = "selected"';?>> Fair @ 20mpg      </option>
        <option value="30"  <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 30.00) echo 'selected = "selected"';?>> Good @ 30mpg      </option>
        <option value="40"  <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 40.00) echo 'selected = "selected"';?>> Excellent @ 40mpg </option>
    </select>

    <input type="submit" value="Calculate">

    <p><a href=""> Reset it! </a></p>

</fieldset>
</form>


<?php
// we will start with the server request method
// then, we will ask ourselves if any fields are empty
// if the fields are not empty, we willelseif they are set

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    if(empty($_POST['name'])){
        echo '<p class="error"> Please fill out your name! </p>';
    }
    if(empty($_POST['miles'])){
        echo '<p class="error"> Please fill out your total driving miles! </p>';
    }
    if(empty($_POST['speed'])){
        echo '<p class="error"> Please fill out how fast will you be driving! </p>';
    }
    if(empty($_POST['hours'])){
        echo '<p class="error"> How many hours per day would you like to drive? </p>';
    } 
    if(empty($_POST['gas'])){
        echo '<p class="error"> Your cost of gas, please! </p>';
    } 
    if($_POST['efficiency'] == NULL){
        echo '<p class="error"> Please select your car\'s efficiency! </p>';
    }
    

    if (isset($_POST['name'], $_POST['miles'], $_POST['speed'], $_POST['hours'], $_POST['gas'], $_POST['efficiency'])){
        $name  = $_POST['name'];
        $miles = floatval($_POST['miles']);
        $speed = floatval($_POST['speed']);
        $hours = floatval($_POST['hours']);
        $gas   = floatval($_POST['gas']);
        $efficiency = floatval($_POST['efficiency']);

        $total_hours = $miles / $speed;
        $days = $total_hours  / $hours;

        $total_gas = $miles / $efficiency;
        $cost = $total_gas * $gas;


        if(!empty( $name && $miles && $speed && $hours && $gas) && ($efficiency != null)){

            echo '
            <div class="box">
            <h2>Hello  '.$name.', </h2>
            <p> You will be travelling a total of <b>'.number_format($total_hours,2).' hours</b>, taking <b>'.$days.' days</b> 
            And, you will be using <b>'.$total_gas.' gallons of gas</b>, costing you <b>$'.$cost.' dollars</b></p>
            </div>
            ';
        }

    }
}


?>


</body>
</html>