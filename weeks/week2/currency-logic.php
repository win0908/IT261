<?php
echo '<table style="width:25%">';
echo '  <tr>';
echo '      <td><a href="http://www.win0908.me/it261/website/index.php"> Home </a>';
echo '      <td><a href="https://github.com/win0908/it261/blob/main/weeks/week2/currency-logic.php"> code </a>';
echo '  </tr>';
echo '</table>';

// logic
// 1 ruble           = 0.017  dollars
// 1 pound sterling  = 1.15   dollars
// 1 canadian dollar = 0.76   dollars
// 1 euro            = 1.00   dollars
// 1 yen             = 0.0074 dollars


// rubles         = 10007
// pound sterling = 500
// canada         = 5000
// euros          = 1200
// yen            = 2000

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My Currency Logic Exercise</title>

    <style>
*  {
    padding: 0;
    margin:  0;
    box-sizing: border-box;
}

#wrapper  {
    width: 500px;
    margin: 30px auto;
}

table  {
    border: 1px solid orange;
    border-collapse: collapse;
    width: 500px;
}

th, td  {
    border: 1px solid orange;
    padding: 8px;
}

h1, h2, h3  {
    text-align: center;
}

    </style>
</head>
<body>
    <div id="wrapper">
        <h1> After our world-wide travels, we have returned home with the following currency</h1>
        <ul>
            <li>Rubles</li>
            <li>Pound sterling</li>
            <li>Canadian Dollar</li>
            <li>Euros</li>
            <li>Yens</li>
        </ul>

        <h2> What shall we do? </h2>
        <table>
            <tr>
                <th colspan="2"> Currency </th>
                <th>             Dollars </th>
            </tr>
            
            <tr>
                <th>Rubles</th>
                <td>10007</td>    
                <td>117.11</td>  
            </tr>
            <tr>
                <th>Pound sterling</th>
                <td>500</td>    
                <td>575</td>  
            </tr>
            <tr>
                <th>Canadian Dollar</th>
                <td>5000</td>    
                <td>3800</td>  
            </tr>
            <tr>
                <th>Euros</th>
                <td>1200</td>    
                <td>1200</td>  
            </tr>
            <tr>
                <th>Yens</th>
                <td>2000</td>    
                <td>14.80</td>  
            </tr>


        </table>
    
    </div>
    <!-- end wrapper -->


</body>
</html>
