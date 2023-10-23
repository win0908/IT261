<?php     //adder-wrong.php

if (isset($_POST['num1'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $myTotal = $num1 + $num2;
    echo '<h2>You added '.$num1.' and '.$num2.' ';
    echo ' <p> and the answer is <br>
    <style="color:red;"> '.$myTotal.' !</p>';
    echo'<p><a href="">Reset page</a>';
}?>
<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> <form action="" method = "post">
<label>Enter the first number:</label><input  type="text" name="num1"><br>
<label>Enter the second number:</label><input type="text" name="num2"><br>
<input type="submit" value="Add Em!!"> </form>

 


</body>
</html>


<!--on line 6-->
<!-- Remove minus sign and changing $Num2 to $num2 -->
<!--on line 7-->
<!-- Changing double quotation to single quotation  -> '<h2>You added '. $num1 .' and '.$num2.' '; -->
<!--on line 9-->
<!-- Missing period, Missing single quotation, and hanging double quotation to single quotation <style="color:red;">'.$myTotal .'!</p>'; -->
<!--on line 10-->
<!-- Missing semi-colon -->
<!--on line 11-->
<!-- Missing PHP closing tags ?> -->
<!--on line 20-->
<!-- Remove Backslash  \, Missing method = "post" -->
<!--on line 21-->
<!-- Missing <label>, changing $Num1 to $num1 -->
<!--on line 22-->
<!-- Missing <label>, putting "Enter the second number:" in side <label></label>-->
<!--on line 23-->
<!-- Missing double quotation -->
<!--on line 29-->
<!-- having an extra ';{?> -->