<?php

// Class coffee exercise
// If today is ..., it will be pumpkin layye day
// INTRODUCING the isset() function
// Then we will introduce our first GLOBAL variable
// our switch



// Starting the switch
// If $GET['today'] is set, $today , then all is well, but it is not set therefore the else is the day!
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET


// what is the isset function -- is asking if something has been set?
// $variable = 'This is our variable';

// if(isset($variable)) {
//     echo 'Variable has been set';
// } else {
//     echo 'Variable has not been set';
// }
// echo '<br>';

// if(isset($_GET['today'])){
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!!!!!';
// }


if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today){
    case 'Monday' : //
        $coffee = '<h2> Monday is our Pumpkin Latte Day! </h2>';
        $pic = 'PumpkinLatte.png';
        $alt = 'Pumpkin Latte';
        $content = '<p> <b> The Pumpkin Latte </b> is a coffee drink made with a mix of traditional fall spice flavors, 
        steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. 
        The beverage is most commonly associated with Starbucks, which first offered the drink in the fall of 2003. </p>';
    break;
    
    case 'Tuesday' : //
        $coffee = '<h2> Tuesday is our Americano Day! </h2>';
        $pic = 'Americano.png';
        $alt = 'Americano';
        $content = '<p> <b> The Americano </b> is another popular type of coffee drink, 
        and it\'s very easy to make! It\'s just espresso with hot water dripping over it. 
        The name came about during World War II when European baristas added water to their espresso drinks for the American soldiers stationed there. 
        The resulting drink had a smoother, less concentrated flavour than espresso and thus the Americano was born. </p>';
    break;
    
    case 'Wednesday' : //
        $coffee = '<h2> Wednesday is our Cappuccino Day! </h2>';
        $pic = 'Cappuccino.png';
        $alt = 'Cappuccino';
        $content = '<p> <b> Cappuccinos </b> are a classic Italian type of coffee drink made of espresso, 
        steamed milk, and thick foam in equal parts. The name comes from the resemblance to the hoods worn by Capuchin monks. 
        Making cappuccino is relatively easy and can be done at home too if you know how to make espresso. </p>';
    break;

    case 'Thursday' : //
        $coffee = '<h2> Thursday is our Black Coffee Day! </h2>';
        $pic = 'BlackCoffee.png';
        $alt = 'Black Coffee';
        $content = '<p> <b> Black Coffee </b> is arguably the most common type of coffee drink out there. 
        Its popularity can be mainly attributed to how easy it is to make this beverage, be it drip, pour-over, 
        French press, or anything else. Black coffee is usually served with no add-ins. </p>';
    break;

    case 'Friday' : //
        $coffee = '<h2> Friday is our Flat White Day! </h2>';
        $pic = 'FlatWhite.png';
        $alt = 'Flat White';
        $content = '<p> <b> Flat White </b>, If you\'re not familiar with flat whites, 
        they\'re a type of coffee drink that\'s made with espresso and steamed milk. When the espresso and milk are mixed to make this joe, 
        they create a delicious combination that\'s both smooth and creamy. And the bubbly nature of the milk also adds a nice touch of sweetness. </p>';
    break;

    case 'Saturday' : 
        $coffee = '<h2> Saturday is our Cafe au Lait Day! </h2>';
        $pic = 'Cafe_au_Lait.png';
        $alt = 'Cafe au Lait';
        $content = '<p> <b> Cafe au Lait </b> is a coffee beverage that is made with dark roast coffee and steamed milk. 
        The milk is generally warmed up and frothed before it is added to the coffee. 
        Cafe au lait is a popular type of coffee drink in France, where it is often served at breakfast. </p>';
    break;

    case 'Sunday' : 
        $coffee = '<h2> Sunday is our Red Eye Day! </h2>';
        $pic = 'RedEye.png';
        $alt = 'Red Eye';
        $content = '<p> <b> Red Eye Coffee </b>  is a favourite among coffee drinkers because of its unique and rich flavour. 
        Adding espresso shots to regular coffee creates this signature type of coffee drink that gives you the boost you need to wake up in the morning. 
        Red Eyes are perfect for those who love strong coffee but don\'t want to drink an entire pot all by themselves; plus, 
        they make excellent morning beverages. </p>';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Ecercise</title>

    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    #wrapper {
        width: 940px;
        margin: 20px auto;
    }
    #coffee_image {
        width: 500px;
        height: 500px;
        object-fit: cover;
    }
    </style>

</head>
<body>
<div id="wrapper">
    <h1> My Switch Classwork Ecercise (Not the daily homework)</h1>
    <?php 

    echo$coffee
    ?>
    <img src="/it261/images/<?php echo $pic ?>"  alt="<?php echo $alt ?>" id="coffee_image"/>
    <?php echo $content ?>
    <h2>Check out our Daily Sepcials</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">    Sunday    </a></li>
        <li><a href="switch.php?today=Monday">    Monday    </a></li>
        <li><a href="switch.php?today=Tuesday">   Tuesday   </a></li>
        <li><a href="switch.php?today=Wednesday"> Wednesday </a></li>
        <li><a href="switch.php?today=Thursday">  Thursday  </a></li>
        <li><a href="switch.php?today=Friday">    Friday    </a></li>
       <li><a href="switch.php?today=Saturday">  Saturday  </a></li>
    </ul>

</div>
<!--  End  -->

<!--  footer  -->
<?php
include(' ./it261/website/includes/footer.php ');