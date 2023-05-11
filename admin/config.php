
    <?php
    $con = mysqli_connect('localhost','root','','ebook');
    /*if($con){
        echo"Connection Established";

    }
    else {
        echo "Connection Failed";
    }
    */
    if(!$con){
        echo"Connection Failed";
    }
    
    session_start();
    
    
    ?>
