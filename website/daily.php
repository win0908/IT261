

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Friday </title>

    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    #container {
        width: 100%;
        display: flex;
        overflow: auto;
        min-height: auto;
        align-items: flex-start;
        flex-direction: column;
        justify-content: flex-start;
    }
    #wrapper {
        width: 940px;
        margin: 20px auto;
    }
    #img {
        width: 500px;
        height: 500px;
        object-fit: cover;
    }
    p {
        font-size: 25px;
    }
    
        a { 
        text-decoration: none;
        color: #57A1FF;
        font-size: 24px;
    }
    #container_header {
        width: 100%;
        display: flex;
        overflow: auto;
        align-items: flex-start;
        flex-direction: column;
        justify-content: flex-start;
    }
    #header {
        flex: 0 0 auto;
        width: 90%;
        height: 144px;
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
    #header_text {
        font-size: 84px;
    }
    #container_header_link {
        flex: 0 0 auto;
        width: auto;
        height: auto;
        display: flex;
        align-items: flex-start;
    }
    #container_header_link1 {
        flex: 0 0 auto;
        width: 96px;
        height: auto;
        display: flex;
        align-items: flex-end;
        flex-direction: column;
    }
    #container_header_link2 {
        flex: 0 0 auto;
        width: 96px;
        height: auto;
        display: flex;
        align-items: flex-end;
        flex-direction: column;
    }        #footer {
        flex: 0 0 auto;
        width: 100%;
        height: 96px;
        display: flex;
        position: relative;
        align-items: center;
        margin-top: 24px;
        margin-bottom: 32px;
        flex-direction: column;
        justify-content: flex-start;

        font-size: 16px;
        white-space: pre;
        font-family: monospace;
    }
    #footer_name {
        align-self: center;
    }
    
    </style>
    
    

</head>
<body bgcolor=#57BAFF>
<div id="container">
    

        <div id="header">
            <a href="http://www.win0908.me/it261">  <h1 id="header_text"> Win0908 </h1>   </a> 
            <div id="container_header_link">
                <div id="container_header_link1">
                    <a href="http://www.win0908.me/it261/website/about.php">   About   </a>
                    <a href="http://www.win0908.me/it261/website/contact.php"> Contact </a>
                    <a href="http://www.win0908.me/it261/website/daily.php">   Daily   </a>
                </div>
                <div id="container_header_link2"> <!-- id="container_head_link" -->
                    <a href="http://www.win0908.me/it261/website/gallery.php"> Gallery </a>
                    <a href="http://www.win0908.me/it261/website/project.php"> Project </a>
                    <a href="https://github.com/win0908/it261/tree/main"> GitHub </a>
                </div>
            </div>
        </div>
   
    <div id="wrapper">
        <h1> Quote of the Day !!! </h1>
        
        <img src="/it261/images/StanLee.png"  alt="Stan Lee" id="img"/>
        <p> "I'm not a self-made man. I've had a lot of help." <b> - Stan Lee - </b> </p>        
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
    

<div id="footer">
    <span id="footer_name"> Web Design By Supawin Soongsawang </span>
    <span> 
        Copyright &copy;2022  All Rights Reserved, <a href="https://validator.w3.org/nu/?doc=http://www.win0908.me/it261/index.php">HTML Validation</a> <a href="https://jigsaw.w3.org/css-validator/validator?uri=http://www.win0908.me/it261/index.php"> CSS Validation</a>
    </span>
</div>
</footer>

</body>
</html>
