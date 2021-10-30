<?php
    $con = mysqli_connect('localhost','root','','facebook_clone');
    $phoneoremail = $_POST['phoneoremail'];

    $check_data = mysqli_query($con,"DELETE FROM userdata WHERE phoneoremail = '$phoneoremail'");


    if($check > 0){
        header("Location:http://localhost/facebook-clone-boilerplate-main/index.html");
    }

?>