
<!DOCTYPE html>

<html>
<head>
    <style>
    
    #container {
        width: 100%;
        display: flex;
        overflow: auto;
        min-height: auto;
        align-items: flex-start;
        flex-direction: column;
        justify-content: flex-start;
    }
    #blog {
        width: 95%;
        font-size: 20px;
        align-self: center;
    }
    #container_weeks_img {
        flex: 0 0 auto;
        width: 100%;
        height: auto;
        margin: 00px;
        display: flex;
        align-self: center;
        margin-top: 0px;
        align-items: center;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
        justify-content: space-between;
    }
    #weeks_img {
        width: 50%;
        align-self: center;
        object-fit: cover;
    }
    #container_weeks {
        flex: 1;
        color: black;
        width: 50%;
        height: 288px;
        display: flex;
        align-self: center;
        align-items: flex-start;
        flex-direction: column;
        justify-content: flex-start;
    }
    #text_mamp {
        width: 90%;
        font-size: 20px;
        align-self: center;
        text-align: center;
        margin-bottom: 8px;
    }
    #mamp_img {
        flex: 0 0 auto;
        width: auto;
        display: flex;
        align-self: center;
        align-items: center;
        justify-content: center;
    }
    #mamp_image1 {
        width: 30%;
        object-fit: cover;
        border-style: solid;
        border-radius: 10px;
        border-color: #F1F1F1; 
    }
    #mamp_image2 {
        width: 30%;
        object-fit: cover;
        border-style: solid;
        border-radius: 10px;
        border-color: #F1F1F1; 
    }
    
    
    /* For Website
    <?php include '/home/dh_yehew8/win0908.me/it261/css/header_css.css';?>
    <?php include '/home/dh_yehew8/win0908.me/it261/css/footer_css.css';?>
    */
    /*  For Test */
    <?php include 'css/header_css.css';?>
    <?php include 'css/footer_css.css';?>

    </style>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/p5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/addons/p5.sound.min.js"></script>
    <meta charset="utf-8" />


    <title> Home </title>
</head>

<body>
<div id="container">
     
    <?php include 'header.php';?>
    <span id="blog">
        <span>Hello! My name is Supawin,</span>
        <br>
        <span>This website for my IT261</span>
        <br>
    </span>
    <div id="container_weeks_img">
           
        
        <!-- <img src="https://images.unsplash.com/photo-1696801946020-ebc638477c5d?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8YWxsfDQ0fHx8fHx8Mnx8MTY5NzQzMjAxNXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=800"
        alt="image" id="weeks_img" /> -->
        

        <div id="p5">
        <script src="mySketch.js"></script>
        </div>

        <div id="container_weeks">
            <h1>Week2</h1>
            <a href="http://www.win0908.me/it261/weeks/week2/var.php"> var.php   </a>
            <a href="http://www.win0908.me/it261/weeks/week2/var2.php"> var2.php </a>
            <a href="http://www.win0908.me/it261/weeks/week2/currency.php"> currency.php </a>
            <a href="http://www.win0908.me/it261/weeks/week2/currency-logic.php"> currency-logic.php </a>

            <h1>Week3</h1>
            <a href="http://www.win0908.me/it261/weeks/week3/about.php"> about.php </a>
            <a href="http://www.win0908.me/it261/weeks/week3/date.php"> date.php </a>
            <a href="http://www.win0908.me/it261/weeks/week3/for-each.php"> for-each.php </a>
            <a href="http://www.win0908.me/it261/weeks/week3/for-loop.php"> for-loop.php </a>
            <a href="http://www.win0908.me/it261/weeks/week3/if.php"> if.php </a>
            <a href="http://www.win0908.me/it261/weeks/week3/switch.php"> switch.php </a>
        </div>
    </div>
    
    <span id="text_mamp">
        <span> --- MAMP --- </span>
        <br>
    </span>
    <div id="mamp_img">
        <img src="/it261/images/screen.png" alt="image" id="mamp_image1" /> 
        <img src="/it261/images/error.png"  alt="image" id="mamp_image2" />
    </div>
</div>


<footer>
    <?php include 'footer.php';?>
</footer>
</body>
</html>

