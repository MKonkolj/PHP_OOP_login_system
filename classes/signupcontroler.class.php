<?php

class SignupControler {

    private $username;
    private $pass;
    private $passrepeat;
    private $email;

    public function __construct($username, $pass, $passrepeat, $email) {
        $this->username = $username;
        $this->pass = $pass;
        $this->passrepeat = $passrepeat;
        $this->email = $email;
    }

    private function emptyInput() {
        $result;
        if(empty($username) || empty($pass) || empty($passrepeat) || empty($email)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }lor

    private function invalidUserId() {
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this ->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail() {
        $result;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    private function passMatch() {
        $result;
        if($this->pass !== $this->passrepeat) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}