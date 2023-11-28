<?php

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case "Monday":
        $today_is = "<h2>Today is Monday!</h2>";
        $color_of_the_day = "#FFDE57";
        $pic = 'BobRoss1.png';
        $alt = 'Bob Ross';
        $quote = '<p> “You can do anything here — the only prerequisite is that it makes you happy.” <b> - Bob Ross - </b> </p>';
        break;
    case "Tuesday":
        $today_is = "<h2>Today is Tuesday!</h2>";
        $color_of_the_day = "#FF57A1";
        $pic = 'MartinLutherKingJr.png';
        $alt = 'Martin Luther King Jr';
        $quote = '<p> "I have a dream that one day this nation will rise up and live out the true meaning of its creed. 
        We hold these truths to be self-evident that all men are created equal." <b> - Martin Luther King Jr. - </b> </p>';
        break;
    case "Wednesday":
        $today_is = "<h2>Today is Wednesday!</h2>";
        $color_of_the_day = "#97FF57";
        $pic = 'WaltDisney.png';
        $alt = 'Walt Disney';
        $quote = '<p> "If you can dream it, you can do it." <b> - Walt Disney - </b> </p>';
        break;
    case "Thursday":
        $today_is = "<h2>Today is Thursday!</h2>";
        $color_of_the_day = "#FF8557";
        $pic = 'SteveJobs.png';
        $alt = 'Steve Jobs';
        $quote = '<p> "The most important thing is to enjoy your life - to be happy - it\'s all that matters." <b> - Steve Jobs - </b> </p>';
        break;
    case "Friday":
        $today_is = "<h2>Today is Friday!</h2>";
        $color_of_the_day = "#57BAFF";
        $pic = 'StanLee.png';
        $alt = 'Stan Lee';
        $quote = '<p> "I\'m not a self-made man. I\'ve had a lot of help." <b> - Stan Lee - </b> </p>';
        break; 
    case "Saturday":
        $today_is = "<h2>Today is Saturday!</h2>";
        $color_of_the_day = "#9957FF";
        $pic = 'LadyGaga.png';
        $alt = 'Lady Gaga';
        $quote = '<p> “I\'m not here to be perfect, I\'m here to be real." <b> - Lady Gaga - </b> </p>';
        break; 
    case "Sunday":
        $today_is = "<h2>Today is Sunday!</h2>";
        $color_of_the_day = "#FF5757";
        $pic = 'BobRoss2.png';
        $alt = 'Bob Ross';
        $quote = '<p> "The way to get started is to quit talking and begin doing." <b> - Walt Disney - </b> </p>';
        break;  
    
    };
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $today; ?> </title>

    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .container {
        width: 100%;
        display: flex;
        overflow: auto;
        min-height: 85vh;
        align-items: flex-start;
        flex-direction: column;
        justify-content: flex-start;
    }
    .wrapper {
        width: auto;
        margin: 0px auto;
    }
    .img {
        width: 500px;
        height: 500px;
        object-fit: cover;
    }
    p {
        font-size: 25px;
    }
    a {
        color: #0f0f0f;
        text-decoration: none;
    }
    
    <?php include '/home/dh_yehew8/win0908.me/it261/css/header.css';?>
    <?php include '/home/dh_yehew8/win0908.me/it261/css/footer.css';?>
    
    </style>
    
    

</head>
<body bgcolor=<?php echo $color_of_the_day ?>>
<div class="container">
    <?php include '/home/dh_yehew8/win0908.me/it261/header.php';?>
    <div class="wrapper">
        <h1> Quote of the Day !!! </h1>
        
        <img src="/it261/images/<?php echo $pic ?>"  alt="<?php echo $alt ?>" class="img"/>
        <?php 
        
        echo $quote 
        
        ?>
        
        <br>
        <br>
        <br>

        <h2> Check out our Daily Quote </h2>
        <ul>
            <li><a href="daily.php?today=Sunday">    Sunday    </a></li>
            <li><a href="daily.php?today=Monday">    Monday    </a></li>
            <li><a href="daily.php?today=Tuesday">   Tuesday   </a></li>
            <li><a href="daily.php?today=Wednesday"> Wednesday </a></li>
            <li><a href="daily.php?today=Thursday">  Thursday  </a></li>
            <li><a href="daily.php?today=Friday">    Friday    </a></li>
            <li><a href="daily.php?today=Saturday">  Saturday  </a></li>
        </ul>

    </div>
</div>
<!--  End  -->

<!--  footer  -->
<footer>
    <?php include '/home/dh_yehew8/win0908.me/it261/footer.php';?>
</footer>

</body>
</html>