
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
        font-size: 30px;
        align-self: center;
        margin-top: 96px;
        margin-left: 24px;
        margin-bottom: 80px;
    }
    #bodycontainer {
        flex: 0 0 auto;
        width: auto;
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
    }
    #bodytextcontainer {
        flex: 0 0 auto;
        width: auto;
        display: flex;
        align-self: stretch;
        align-items: center;
        flex-direction: column;
        justify-content: flex-start;
        
    }
    #weeks_img {
        width: 50%;
        align-self: center;
        object-fit: cover;
    }
    #container_weeks {
        flex: 0 0 auto;
        width: 100%;
        display: flex;
        align-self: center;
        align-items: flex-start;
        justify-content: flex-start;
        
    }
    #container_link1, #container_link2, #container_link3 {
        flex: 0 0 auto;
        width: auto;
        height: auto;
        display: flex;
        align-items: flex-start;
        margin-left: 32px;
        flex-direction: column;
    }
    #text_mamp {
        width: 90%;
        font-size: 24px;
        align-self: center;
        text-align: center;
        margin-top: 48px;
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
    <?php include 'css/header_css.css';?>
    <?php include 'css/footer_css.css';?> 
    </style>
    
    
    
    


    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/p5.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.7.0/addons/p5.sound.min.js"></script> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title> Home </title>
</head>

<body>
<div id="container">

    <!-- Header -->
    <?php include '/home/dh_yehew8/win0908.me/it261/header.php';?>
    
   
    <div id="bodycontainer">
        
        <!--
        <img src="https://images.unsplash.com/photo-1696801946020-ebc638477c5d?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8YWxsfDQ0fHx8fHx8Mnx8MTY5NzQzMjAxNXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=800" alt="image" id="weeks_img" />
        -->
        <div id="p5">
        <script src="mySketch.js"></script>
        </div>
        
        <div id="bodytextcontainer">
            
            <span id="blog" >
                <span>Hello! My name is Supawin,</span>
                <br>
                <span>This website for my IT261</span>
                <br>
            </span>
            <div id="container_weeks">
                <div id="container_link1">
                        
                    <h1>&raquo; Week2</h1>
                    <a href="http://www.win0908.me/it261/weeks/week2/var.php"> var.php   </a>
                    <a href="http://www.win0908.me/it261/weeks/week2/var2.php"> var2.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week2/currency.php"> currency.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week2/currency-logic.php"> currency-logic.php </a>

                    <h1>&raquo; Week3</h1>
                    <a href="http://www.win0908.me/it261/weeks/week3/about.php"> about.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week3/date.php"> date.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week3/for-each.php"> for-each.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week3/for-loop.php"> for-loop.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week3/if.php"> if.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week3/switch.php"> switch.php </a>

                </div>
                <div id="container_link2">
    
                    <h1>&raquo; Week4</h1>
                    <a href="http://www.win0908.me/it261/weeks/week4/adder.php">           adder.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week4/arithmetic-form.php"> arithmetic-form </a>
                    <a href="http://www.win0908.me/it261/weeks/week4/celcius.php"> celcius.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week4/form-get.php"> form-get.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week4/form1.php"> form1.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week4/form2.php"> form2.php </a>
                    <a href="http://www.win0908.me/it261/weeks/week4/form3.php"> form3.php </a>

                    

                </div>
                <div id="container_link3">

                    <h1>&raquo; Week5</h1>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>

                    <h1>&raquo; Week6</h1>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>

                    <h1>&raquo; Week7</h1>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>
                    <a href="https://example.com" target="_blank" rel="noreferrer noopener"> ... </a>

                </div>
            </div>
        </div>
        
        <!--  Right IMG -->

    </div>

    <span id="text_mamp">
        <span> --- MAMP --- </span>
        <br>
    </span>
    <div id="mamp_img">
        <img src="/it261/images/screen_new.png" alt="image" id="mamp_image1" /> 
        <img src="/it261/images/error_new.png"  alt="image" id="mamp_image2" />
    </div>
</div>



<footer>
    
<!-- footer -->
<?php include '/home/dh_yehew8/win0908.me/it261/footer.php';?>


</footer>
</body>
</html>

