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
    if(empty($_POST['email'])){
        $emailError = "Email is required";
    } else {
        $email = htmlspecialchars(trim($_POST['email']));

        //check for correct email using filter_var and filter_validate_email

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError = "Invalid email format";
        }
    }

    if(empty($usernameError) && empty($emailError)){
        echo "Form submitted";
        echo "<br>";
        echo "Username:", $username, "<br>", "Email: ", "<br>", $email, "<br>";
    }else {
        echo "Errors: <br>";
        echo $usernameError,"<br>", $emailError;
    }
}