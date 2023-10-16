<!DOCTYPE html>

<html>
<head>
    <style>
    a { 
        text-decoration: none;
        color: #57A1FF;
    }
    #container {
        width: 100%;
        display: flex;
        overflow: auto;
        min-height: 100vh;
        align-items: flex-start;
        flex-direction: column;
        justify-content: flex-start;
    }
    #head {
        flex: 0 0 auto;
        width: 90%;
        height: var(--dl-size-size-large);
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
    #text {
        font-size: 75px;
    }
    #container_head {
        flex: 0 0 auto;
        width: auto;
        height: auto;
        display: flex;
        align-items: flex-start;
    }
    #container_head_link1 {
        flex: 0 0 auto;
        width: 96px;
        height: auto;
        display: flex;
        align-items: flex-end;
        flex-direction: column;
    }
    #container_head_link2 {
        flex: 0 0 auto;
        width: 96px;
        height: auto;
        display: flex;
        align-items: flex-end;
        flex-direction: column;
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
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    #mamp_image1 {
        width: 50%;
        /*height: 601.53px;*/
        object-fit: cover;
    }
    #mamp_image2 {
        width: 50%;
        /*height: 332.65px;*/
        object-fit: cover;
    }
    #bottom {
        flex: 0 0 auto;
        width: 100%;
        height: 96px;
        display: flex;
        position: relative;
        align-items: center;
        flex-direction: column;
        justify-content: flex-start;
    }
    #bottom_name {
        font-size: 18px;
        align-self: center;
        margin-top: 24px;
    }
    #container_htmlcss_checker {
        flex: 0 0 auto;
        width: 15%;
        height: auto;
        display: flex;
        margin-top: 8px;
        align-items: center;
        margin-bottom: 24px;
        flex-direction: row;
        justify-content: space-between;
    }
    #htmlcss_checker {
        font-size: 18px;
    }
    
    </style>
    <title> Home </title>
</head>

<body>
<div id="container">
    <div id="head">
        <h1 id="text">Win0908</h1>
        <div id="container_head">
            <div id="container_head_link1">
                <a href="http://www.win0908.me/it261/website/about.php">   About   </a>
                <a href="http://www.win0908.me/it261/website/contact.php"> Contact </a>
                <a href="http://www.win0908.me/it261/website/daily.php">   Daily   </a>
            </div>
            <div id="container_head_link2"> <!-- id="container_head_link" -->
                <a href="http://www.win0908.me/it261/website/gallery.php"> Gallery </a>
                <a href="http://www.win0908.me/it261/website/project.php"> Project </a>
                <a href="https://github.com/win0908/it261/tree/main"> GitHub </a>
            </div>
        </div>
    </div>
    <span id="blog">
        <span>Hello! My name is Supawin,</span>
        <br>
        <span>This website for my IT261</span>
        <br>
    </span>
    <div id="container_weeks_img">
        <img src="https://images.unsplash.com/photo-1696801946020-ebc638477c5d?crop=entropy&amp;cs=tinysrgb&amp;fit=max&amp;fm=jpg&amp;ixid=M3w5MTMyMXwwfDF8YWxsfDQ0fHx8fHx8Mnx8MTY5NzQzMjAxNXw&amp;ixlib=rb-4.0.3&amp;q=80&amp;w=800"
        alt="image" id="weeks_img" />
        
        <div id="container_weeks">
            <h1>Week2</h1>
            <a href="http://www.win0908.me/it261/weeks/week2/var.php"> var.php   </a>
            <a href="http://www.win0908.me/it261/weeks/week2/var2.php"> var2.php </a>
            <a href="http://www.win0908.me/it261/weeks/week2/currency.php"> currency.php </a>
            <a href="http://www.win0908.me/it261/weeks/week2/currency-logic.php"> currency-logic.php </a>

            <h1>Week3</h1>
            <a href="https://example.com"> Week3_1 </a>
            <a href="https://example.com"> Week3_2 </a>
            <a href="https://example.com"> Week3_3 </a>
        </div>
    </div>
    <span id="text_mamp">
        <span> --- MAMP --- </span>
        <br>
    </span>
    <div id="mamp_img">
        <img src="/it261/images/screen_new.png" alt="image" id="mamp_image1" />
        <img src="/it261/images/error.png"      alt="image" id="mamp_image2" />
    </div>
    <div id="bottom">
        <span id="bottom_name">Web Design By Supawin Soongsawang</span>
        <div id="container_htmlcss_checker">
            <a href="https://validator.w3.org/nu/?doc=http://www.win0908.me/it261/index.php" id="htmlcss_checker"> HTML Validation </a>
            <a href="https://jigsaw.w3.org/css-validator/validator?uri=http://www.win0908.me/it261/index.php" >    CSS  Validation </a>
        </div>
    </div>
</div>

</body>
</html>
