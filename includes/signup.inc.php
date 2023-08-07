<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {

        //Grabing data
        $uid = $_POST["uid"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $pwdrepeat = $_POST["pwdrepeat"];

        //Instantiate signupContr class
        include "../classes/DbConnector.php";
        include "../classes/signup.classes.php";
        include "../classes/signup-contr.classes.php";
        $signup = new SignUpContr($uid, $email, $pwd, $pwdrepeat);

        //Running error handlers and user signup
        $signup->signupUser();
        
        $userId = $signup->fetchUserId($uid); //for the updating data
        
        //Going back to front page
        header("location:../signup.php?error=none");
    }
}
