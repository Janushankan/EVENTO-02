<?php

class SignUpContr extends Signup{

    private $uid;
    private $email;
    private $pwd;
    private $pwdrepeat;

    public function __construct($uid, $email, $pwd, $pwdrepeat) {
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
    }
    
    public function signupUser() {
        if($this->emptyInput() == false){
            //echo "Empty inputs";
            header("location:../sign_in.php?error=emptyinput");
            exit();
        }
        if($this->invalidEmail() == false){
            //echo "Invalid Email";
            header("location:../sign_in.php?error=email");
            exit();
        }
        if($this->pwdMatch() == false){
            //echo "Password dosen't match";
            header("location:../sign_in.php?error=passwordmatch");
            exit();
        }
        if($this->uidTakenCheak() == false){
            //echo "Username or email already exist";
            header("location:../sign_in.php?error=useroremailtaken");
            exit();
        }
        
        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if (empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdrepeat)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    
    private function pwdMatch() {
        $result;
        if($this->pwd !== $this->pwdrepeat){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    
    private function uidTakenCheak() {
        $result;
        if(!$this->checkUser($this->uid, $this->email)){
            $result = false;
        }
        else{
            $result = true;
        }
        return $result;
    }
    
    public function fetchUserId ($uid) {
        $userId = $this->getUserId($uid);
        return $userId[0]["client_id"];
    }

}
