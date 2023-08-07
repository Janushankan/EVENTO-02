<?php

class LoginContr extends Login{

    private $uid;
    private $email;
    private $pwd;
    private $pwdrepeat;

    public function __construct($uid, $pwd) {
        $this->uid = $uid;
        $this->pwd = $pwd;
    }
    
    public function loginUser() {
        if($this->emptyInput() == false){
            //echo "Empty inputs";
            header("location:../sign_in.php?error=emptyinput");
            exit();
        }
        
        $this->getUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result;
        if (empty($this->uid) ||  empty($this->pwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}
