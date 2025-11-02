<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //multiple assignment

    $usernameError = $emailError = "";
    $username = $email = "";

    if(empty ($_POST['username'])){
        $usernameError = "Username is required";
    }else{
        $username = htmlspecialchars(trim($_POST['username']));
    }
    echo $username;
}