<?php

//do not call out the hearder include yet!
// the following information is above the doctype
include('config.php');

// is id set?

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM movie WHERE movie_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        $movie_name   = stripcslashes($row['movie_name']);
        $director     = stripcslashes($row['director']);
        $release_date = stripcslashes($row['release_date']);
        $details      = stripcslashes($row['details']);
        
        // will I add a column?
        $feedback = '';

    } // close while loop

} else {
    $feedback = 'Houston, we have a problem';
}


include('./includes/header.php');
?>



<main>
    <h1> Welcome to my Movie View Page </h1>
    <h2> <?php echo $movie_name; ?> </h2>
    
    <ul>
        <?php
        echo '
        <li><b> Director:      </b> '.$director.'     </li>
        <li><b> Release Date:  </b> '.$release_date.' </li>
        <li><b>Details:        </b> '.$details.'      </li>
        ';
        ?>
    </ul>
    <p> <?php echo $details; ?> </p>
    <p> Return to our <a href="project.php">movie page!</a></p>

</main>

<aside>
    <figure>
        <img src="/it261/images/movie<?php echo $id;?>.jpg" alt="<?php echo $movie_name;?>">
    </figure>

</aside>

</div>
<!-- End Wrapper -->



<?php
include('./includes/footer.php');