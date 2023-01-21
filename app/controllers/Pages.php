<?php
  class Pages extends Controller {
    public $productmodels;
    public function __construct(){
        $this->productmodels=$this->model('Product');
    }
    
    public function index(){
      $data = [
        'title' => 'glowguruback',
      ];
     
      $this->view('pages/index', $data);
    }

    
    public function product(){
      $products = $this->productmodels->List();
      $data = [
          'products' => $products
      ];
      $this->view('pages/product',$data);
      ;
      
      $this->view('pages/product', $data);
    }
    public function login(){
      $data = [
        'title' => 'login',
      ];
      
      $this->view('pages/login', $data);
    }

  public function itemform()
  {
    $data = [
      'title' => 'itemform',
    ];

    $this->view('inc/itemform', $data);
  }
  public function blog()
  {
    $data = [
      'title' => 'blog',
    ];

    $this->view('pages/blog', $data);
  }

    
  }