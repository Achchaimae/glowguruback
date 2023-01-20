<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'glowguru',
      ];
     
      $this->view('pages/index', $data);
    }

    
    public function product(){
      $data = [
        'title' => 'product',
      ];
      
      $this->view('pages/product', $data);
    }
    public function login(){
      $data = [
        'title' => 'login',
      ];
      
      $this->view('pages/login', $data);
    }
    public function dashboard(){
      $data = [
        'title' => 'dashboard',
      ];
      
      $this->view('pages/dashboard', $data);
    }
  }