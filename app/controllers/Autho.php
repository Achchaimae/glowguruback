<?php

class Autho extends Controller{
    public $loginmodels;
    public function __construct(){
        $this->loginmodels=$this->model('Login');
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $data=[
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_err' => '',
            ];
            if($this->loginmodels->checkadmin($data)){
                $this->createSession($data['email']);
            }
            else{
                $data['email_err']='Invalid email or password';
                $this->view('pages/login',$data);
            }
            
        }
        else {
            // Load form (page page before the submit)
            $data=[
                'email' => '',
                'password' => '',
                'email_err' => ''
            ];
            $this->view('pages/login',$data);
        }
    }
    
    public function createSession($adm){
        $_SESSION['admin'] = $adm;
        redirect('pages/dashboard');
    }
    
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('pages/login');
    }
}