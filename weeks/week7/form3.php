<?php

$first_name = '';
$last_name = '';
$email = '';
$wines = '';
$phone = '';
$regions = '';
$gender = '';
$comments = '';
$privacy = '';



$first_name_err = '';
$last_name_err = '';
$email_err = '';
$wines_err = '';
$phone_err = '';
$regions_err = '';
$gender_err = '';
$comments_err = '';
$privacy_err = '';



if($_SERVER['REQUEST_METHOD'] == "POST") {

    // if inputs are empty, we will declare a statement else we will assign the $_POST to a vriable
    // $wines = $_POST['wines']
    if(empty($_POST['wines'])) {
        // say something or do something
    $wines_err = 'What... no wines?';
    } else {
        $wines = $_POST['wines'];
    }

    if(empty($_POST['first_name'])) {
        // say something or do something
    $first_name_err = 'Please fill in your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        // say something or do something
    $last_name_err = 'Please fill in your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        // say something or do something
    $email_err = 'Please fill in your e-mail';
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        // say something or do something
    $gender_err = 'Please check your gender';
    } else {
        $gender = $_POST['gender'];
    }

    // if(empty($_POST['phone'])) {
    //     // say something or do something
    // $phone_err = 'Please fill in your phone number';
    // } else {
    //     $phone = $_POST['phone'];
    // }

    if(empty($_POST['phone'])) {
        $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        }
    }


    if(empty($_POST['regions'])) {
        // say something or do something
    $regions_err = 'Please choose your regions';
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        // say something or do something
    $comments_err = 'We value your input';
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        // say something or do something
    $privacy_err = 'You must agree to receive spam email';
    } else {
        $privacy = $_POST['privacy'];
    }


function my_wines() {
    $my_return='';
    if(!empty($_POST['wines'])){
        $my_return = implode(',',$_POST['wines']);
    }
    return $my_return;
}


if(isset($_POST['first_name'], 
$_POST['last_name'], 
$_POST['email'],
$_POST['wines'], 
$_POST['phone'],
$_POST['regions'],
$_POST['gender'], 
$_POST['comments'],
$_POST['privacy'])) {

    $to = '@gmail.com';
    $subject = 'Test email on  '.date('m/d/y, h i A');
    $body = '
    First Name:  '.$first_name.'      '.PHP_EOL.'
    Last Name:   '.$last_name.'       '.PHP_EOL.'
    email:       '.$email.'           '.PHP_EOL.'
    gender:      '.$gender.'          '.PHP_EOL.'
    phone:       '.$phone.'           '.PHP_EOL.'
    Wines:       '.my_wines($wines).' '.PHP_EOL.'
    regions:     '.$regions.'         '.PHP_EOL.'
    comments:    '.$comments.'        '.PHP_EOL.'
    ';

    $headers = array(
        'From' => 'noreply@mystudentswa.com'
    );

    // if statement - that this email form will work ONLY if all the fields are fill out!!!
    if(!empty(
        $first_name &&
        $last_name &&
        $email &&
        $wines &&
        $phone &&
        $regions &&
        $gender &&
        $comments) &&
        preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            mail( $to, $subject, $body, $headers);
            header ('Location:thx.php');
        }
        // don't forget, you must upload your form onto the server to receive an email!!!


 } // end isset






} //closing server request method
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form 3 in Week 7 - Phone Validation! </title>
    <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h1> Second form in Week 6 </h1>
<fieldset>
    <legend> Contact Supawin </legend>
    
    <label> First Name </label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>" >
    <span><?php echo $first_name_err; ?></span>

    <label> Last Name </label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>" >
    <span><?php echo $last_name_err; ?></span>

    <label> Email </label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" >
    <span><?php echo $email_err; ?></span>


    <label> Gender </label>
    <ul>
        <li><input type="radio" name="gender" value="male"   <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male')   echo 'checked="echecked"; '?> >Male</li>
        <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="echecked"; '?> >Female</li>
        <li><input type="radio" name="gender" value="neither"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither')echo 'checked="echecked"; '?> >Neither</li>
    </ul>
    <span><?php echo $gender_err; ?></span>

    
    <label> Phone </label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>" >
    <span><?php echo $phone_err; ?></span>


    <label> Favorite Wines </label>
    <ul>
        <li><input type="checkbox" name="wines[]" value="cab"    <?php if(isset($_POST['wines']) && in_array('cab',$wines))    echo 'checked="echecked"; '?> >Cabernet</li>
        <li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot',$wines)) echo 'checked="echecked"; '?> >Merlot</li>
        <li><input type="checkbox" name="wines[]" value="syrah"  <?php if(isset($_POST['wines']) && in_array('syrah',$wines))  echo 'checked="echecked"; '?> >Syrah</li>
        <li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec',$wines)) echo 'checked="echecked"; '?> >Malbec</li>
        <li><input type="checkbox" name="wines[]" value="red"    <?php if(isset($_POST['wines']) && in_array('red',$wines))    echo 'checked="echecked"; '?> >Red Blend</li>
    </ul>
    <span><?php echo $wines_err; ?></span>
    

    <label> Regions </label>
    <select name="regions">
        <option value="" <?php if(isset($_POST['regions']) && is_null($_POST['regions'])) echo 'selected="unselected"' ;?>> Select One! </option>

        <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "nw") echo 'selected="selected"' ;?>> Northwest </option>
        <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "sw") echo 'selected="selected"' ;?>> Southwest </option>
        <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == "mw") echo 'selected="selected"' ;?>> Midwest </option>
        <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == "ne") echo 'selected="selected"' ;?>> Northeast </option>
        <option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == "se") echo 'selected="selected"' ;?>> Southeast </option>
    </select>
    <span><?php echo $regions_err; ?></span>


    <label> Comments </label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
    <span><?php echo $comments_err; ?></span>

    <label> Privacy </label>
    <ul>
    <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked = "checked"' ;?>> Yes </li>
    </ul>
    <span><?php echo $privacy_err; ?></span>

    <input type="submit" value="Send it">

    <p><a href=""> Reset </a></p>



</fieldset>
</form>
    
</body>
</html>