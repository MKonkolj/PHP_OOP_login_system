<?php

if(isset($_POST["submit"])) {

    // Grabbing the data
    $user_id = $_POST["username"];
    $pass = $_POST["pass"];
    $passrepeat = $_POST["passrepeat"];
    $email = $_POST["email"];

    // Instantiate SignupControler class
    include "includes\autoloader.inc.php";

    $signup = new SignupControler($user_id, $pass, $passrepeat, $email);


    // Running error handlers and user signup

    // Going back to front page
}