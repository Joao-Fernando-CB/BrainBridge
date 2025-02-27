<?php
    
    namespace Models;
    
    session_start();
    use \DB\Mysql;

    class UserModel{

        public $mysql;

        public function __construct(){
            $this->mysql = new Mysql;
        }

        public function login($email, $password){          
            $result = $this->mysql->getOne(array('email' => $email, 'password' => md5($password)), "user");

            if($result == true){
                $_SESSION['logged'] = true;
            }

            return $result;
        }

        public function getUsers(){
            return $this->mysql->getAll("user");
        }

    }