<?php
// My Video Game List
$game['Elden_Ring']        = 'Elden Ring is a 2022 action role-playing game developed by FromSoftware. It was directed by Hidetaka Miyazaki with worldbuilding provided by fantasy writer George R. R.';
$game['Bloodborne']        = 'Bloodborne is a 2015 action role-playing game developed by FromSoftware.';
$game['Zelda']             = 'The Legend of Zelda: Breath of the Wild is a 2017 action-adventure game developed and published by Nintendo.';
$game['God_of_War']        = 'God of War is an action-adventure game franchise created by David Jaffe at Sony\'s Santa Monica Studio.';
$game['Sekiro']            = 'Sekiro: Shadows Die Twice is a 2019 action-adventure game developed by FromSoftware.';
$game['Hades']             = 'Hades is a 2020 roguelike video game developed and published by Supergiant Games.';
$game['Ghost_of_Tsushima'] = 'Ghost of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment.';
$game['Overwatch']         = 'Overwatch is a multimedia franchise centered on a series of online multiplayer first-person shooter video games developed by Blizzard Entertainment.';


//  variable  key             value
//  $name                     $image



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gallery </title>
    <style>
        body {
            align-items: flex-start;
            flex-direction: column;
            justify-content: flex-start;
            margin: 0px;
            background-size: cover;
            background-image: url('https://images.unsplash.com/photo-1698609552233-12df35c55ecc?ixid=M3w5MTMyMXwwfDF8YWxsfDQ1NHx8fHx8fDJ8fDE2OTk5MzE5NDN8&ixlib=rb-4.0.3&w=1500');
        }  
        a {
            color: #0f0f0f;
            text-decoration: none;
        }
        table {
            border-collapse: collapse;
        }
        <?php include '/home/dh_yehew8/win0908.me/it261/css/header.css';?> 
        <?php include '/home/dh_yehew8/win0908.me/it261/css/footer.css';?> 
        
    </style>

</head>
<body>

<?php include '/home/dh_yehew8/win0908.me/it261/header.php';?>

<table>
<?php foreach($game as $name => $image)       :?>
<tr>
    <td><img src="/it261/images/<?php echo substr( $name, 0, 3);?>.jpg" alt="<?php echo str_replace( '_', ' ', $name);?>"></td>
    <td><?php echo str_replace( '_', ' ', $name)                                                                       ;?></td>
    <td><?php echo $image                                                                                              ;?></td>
</tr>
<?php endforeach       ;?>
</table>

<?php include '/home/dh_yehew8/win0908.me/it261/footer.php';?>

</body>
</html>