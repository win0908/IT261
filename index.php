
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        <?php include 'css/index.css';?>
        <?php include 'css/header.css';?> 
        <?php include 'css/footer.css';?>  
    </style>


</head>

<body class="body">

<!--  Header -->
<?php include '/home/dh_yehew8/win0908.me/it261/header.php';?>



<!--  Main -->
<div class="main">
    
    <!--  Main_Left  -->
    <?php
        $photos[0] = 'photo-1699363177262-6fcf22c0e861?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
        $photos[1] = 'photo-1696312220626-a808c511d070?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
        $photos[2] = 'photo-1696250989403-8950d3dde78a?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
        $photos[3] = 'photo-1667228339040-38a7dbb224f7?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
        $photos[4] = 'photo-1673529944909-93fa82415ad5?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D';
        $i = rand(0,4);
    ;?>

    <div class="main-l">
        <img src="https://images.unsplash.com/<?php echo $photos[$i]; ?>" alt="image" class="main-img" />
        <div class="mamp-text"><span> ⬅ MAMP ➡ </span></div>
        <div class="mamp-img">
            <img src="/it261/images/screen_new.png" alt="image" class="mamp1" />
            <img src="/it261/images/error_new.png" alt="image" class="mamp2" />
        </div>
    </div>




    <!--  Main_Right -->
    <div class="main-r">
        <div class="bio">
          <h1>Hello! My name is Supawin,<br>This website for my IT261</h1>
        </div>
        <div class="weeks">
          <div class="weeks-l">
            <div class="week">
                <h1> ➧ Week2 </h1>
                <a href="http://www.win0908.me/it261/weeks/week2/var.php">            var.php   </a>
                <a href="http://www.win0908.me/it261/weeks/week2/var2.php">           var2.php </a>
                <a href="http://www.win0908.me/it261/weeks/week2/currency.php">       currency.php </a>
                <a href="http://www.win0908.me/it261/weeks/week2/currency-logic.php"> currency-logic.php </a>
            </div>
            <div class="week">
                <h1> ➧ Week3 </h1>
                <a href="http://www.win0908.me/it261/weeks/week3/about.php">    about.php </a>
                <a href="http://www.win0908.me/it261/weeks/week3/date.php">     date.php </a>
                <a href="http://www.win0908.me/it261/weeks/week3/for-each.php"> for-each.php </a>
                <a href="http://www.win0908.me/it261/weeks/week3/for-loop.php"> for-loop.php </a>
                <a href="http://www.win0908.me/it261/weeks/week3/if.php">       if.php </a>
                <a href="http://www.win0908.me/it261/weeks/week3/switch.php">   switch.php </a>
            </div>
            <div class="week">
                <h1> ➧ Week4 </h1>
                <a href="http://www.win0908.me/it261/weeks/week4/adder.php">           adder.php </a>
                <a href="http://www.win0908.me/it261/weeks/week4/arithmetic-form.php"> arithmetic-form </a>
                <a href="http://www.win0908.me/it261/weeks/week4/celcius.php">         celcius.php </a>
                <a href="http://www.win0908.me/it261/weeks/week4/form-get.php">        form-get.php </a>
                <a href="http://www.win0908.me/it261/weeks/week4/form1.php">           form1.php </a>
                <a href="http://www.win0908.me/it261/weeks/week4/form2.php">           form2.php </a>
                <a href="http://www.win0908.me/it261/weeks/week4/form3.php">           form3.php </a>
            </div>
          </div>
          <div class="weeks-r">
          <div class="week">
                <h1> ➧ Week5 </h1>
                <a href="http://www.win0908.me/it261/weeks/week5/currency1.php">  currency1.php </a>
                <a href="http://www.win0908.me/it261/weeks/week5/currency2.php">  currency2.php </a>
                <a href="http://www.win0908.me/it261/weeks/week5/currency3.php">  currency3.php </a>
                <a href="http://www.win0908.me/it261/weeks/week5/currency4.php">  currency4.php </a>
                <a href="http://www.win0908.me/it261/weeks/week5/null.php">       null.php</a>
                <a href="http://www.win0908.me/it261/weeks/week5/calculator.php"> calculator.php </a>
            </div>
            <div class="week">
                <h1> ➧ Week6 </h1>
                <a href="http://www.win0908.me/it261/weeks/week6/form.php"> form.php </a>
                <a href="http://www.win0908.me/it261/weeks/week6/form2.php"> form2.php </a>
                <a href="http://www.win0908.me/it261/weeks/week6/functions.php"> functions.php </a>
            </div>
            <div class="week">
                <h1> ➧ Week7 </h1>
                <a href="http://www.win0908.me/it261/weeks/week7/form3.php">    form3.php </a>
                <a href="http://www.win0908.me/it261/weeks/week7/pictures.php"> pictures.php </a>
                <a href="http://www.win0908.me/it261/weeks/week7/rand.php">     rand.php </a>
                <a href="http://www.win0908.me/it261/weeks/week7/strings.php">  strings.php </a>
            </div>
          </div>
        </div>
    </div>
</div>



<!--  Footer -->
<?php include '/home/dh_yehew8/win0908.me/it261/footer.php';?>


</body>
</html>
