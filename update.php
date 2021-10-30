<?php
    $con = mysqli_connect('localhost','root','','facebook_clone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check = mysqli_query($con,"UPDATE userdata SET password = '$password' WHERE phoneoremail = '$password'");


    if($check > 0){
        header("Location:http://localhost/facebook-clone-boilerplate-main/mainpage.html");
    }

?>