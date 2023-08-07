<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {

        //Grabing data
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        //Instantiate signupContr class
        include "../classes/DbConnector.php";
        include "../classes/login.classes.php";
        include "../classes/login-contr.classes.php";
        $login = new LoginContr($uid, $pwd);

        //Running error handlers and user signup
        $login->loginUser();

        //Going back to front page
        header("location:../index.php?error=none");
    }
}
