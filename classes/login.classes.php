<?php

class Login extends classes\DbConnector {

    public function getUser($uid, $pwd) {
        $query = "SELECT password FROM client WHERE username = ? OR email = ?";
        $stmt = $this->getConnection()->prepare($query);

        if (!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location:../sign_in.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location:../sign_in.php?error=usernotfound");
            exit();
        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHashed[0]["password"]);

        if ($checkPwd == false) {
            $stmt = null;
            header("location:../sign_in.php?error=wrongpassword");
            exit();
        } elseif ($checkPwd == true) {
            $query = "SELECT * FROM client WHERE username = ? OR email = ? AND password = ?";
            $stmt = $this->getConnection()->prepare($query);

            if (!$stmt->execute(array($uid, $uid, $pwd))) {  //using double uid to take the email also as an username to login
                $stmt = null;
                header("location:../sign_in.php?error=stmtfailed");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location:../sign_in.php?error=usernotfound");
                exit();
            }
            
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            session_start(); //session is starting
            $_SESSION["userid"] = $user[0]["client_id"];
            $_SESSION["useruid"] = $user[0]["username"];
            $_SESSION["email"] = $user[0]["email"];
            $stmt = null;
        }

        $stmt = null;
    }

}
