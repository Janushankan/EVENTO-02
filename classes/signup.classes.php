<?php

class Signup extends classes\DbConnector {

    public function setUser($uid, $pwd, $email) {
        $query = "INSERT INTO client (username, password, email) VALUES(?, ?, ?)";
        $stmt = $this->getConnection()->prepare($query);

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location:../sign_in.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    public function checkUser($uid, $email) {
        $query = "SELECT username FROM client WHERE username = ? OR email = ?";
        $stmt = $this->getConnection()->prepare($query);

        if (!$stmt->execute(array($uid, $email))) {
            $stmt = null;
            header("location:../sign_in.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        } else {
            $resultCheck = true;
        }
        return $resultCheck;
    }

    public function getUserId($uid) {
        $query = "SELECT client_id FROM client WHERE username = ?";
        $stmt = $this->getConnection()->prepare($query);

        if (!$stmt->execute(array($uid))) {
            $stmt = null;
            header("location: index.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: index.php?error=profilenotfound");
            exit();
        }

        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC); //if query is running getting data ass an array
        return $profileData;
    }

}
