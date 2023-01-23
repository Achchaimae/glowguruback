<?php
    class Products extends Controller{
        public $productmodels;
        public function __construct(){
            $this->productmodels=$this->model('Product');
        }
        public function dashboard(){
            $products = $this->productmodels->List();
            $data = [
                'products' => $products
            ];
            $this->view('pages/dashboard',$data);
        }

        public function add(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $count =count($_POST['name']);
                for ($i=0; $i <$count ; $i++) { 
                  
                
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imgTmp, 'img/upload/' . $imgName);
                $data=[
                    'name' => $_POST['name'],
                    'image' => $imgName,
                    'price' => $_POST['price'],
                    'quantity' => $_POST['quantity'],
                    'description' => $_POST['description'],
                    'name_err' => '',
                    'image_err' => '',
                    'price_err' => '',
                    'quantity_err' => '',
                    'description_err' => ''
                    
                ];
                
                if(empty($data['name'])){
                    $data['name_err']='Please enter name';
                }
                if(empty($data['image'])){
                    $data['image_err']='Please enter image';
                }
                if(empty($data['price'])){
                    $data['price_err']='Please enter price';
                }
                if(empty($data['quantity'])){
                    $data['quantity_err']='Please enter quantity';
                }
                if(empty($data['description'])){
                    $data['description_err']='Please enter description';
                }
                if(empty($data['name_err']) && empty($data['image_err']) && empty($data['price_err']) && empty($data['quantity_err']) && empty($data['description_err'])){
                    if($this->productmodels->Add($data)){
                        redirect('Products/dashboard');
                    }
                    else{
                        die('Something went wrong');
                    }
                }
                else{
                    $this->view('inc/itemform',$data);
                }
            }
            }
            else {
                // Load form (page page before the submit)
                $data=[
                    'name' => '',
                    'image' => '',
                    'price' => '',
                    'quantity' => '',
                    'description' => '',
                    'name_err' => '',
                    'image_err' => '',
                    'price_err' => '',
                    'quantity_err' => '',
                    'description_err' => ''
                ];
                $this->view('inc/itemform',$data);
            }
        }
        public function edit($id){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $productID=$this->productmodels->Get($id);
                $data=[
                    'id' => $productID->id,
                    'name' => $_POST['name'],
                    'image' => $_POST['image'],
                    'price' => $_POST['price'],
                    'quantity' => $_POST['quantity'],
                    'description' => $_POST['description'],
                    'name_err' => '',
                    'image_err' => '',
                    'price_err' => '',
                    'quantity_err' => '',
                    'description_err' => ''
                ];
                if(empty($data['name'])){
                    $data['name_err']='Please enter name';
                }
                if(empty($data['price'])){
                    $data['price_err']='Please enter price';
                }
                if(empty($data['quantity'])){
                    $data['quantity_err']='Please enter quantity';
                }
                if(empty($data['description'])){
                    $data['description_err']='Please enter description';
                }
                if(empty($data['name_err'])  && empty($data['price_err']) && empty($data['quantity_err']) && empty($data['description_err'])){
                    if($this->productmodels->Update($data)){
                        redirect('Products/dashboard');
                    }
                    else{
                        die('Something went wrong');
                    }
                }
                else{
                    $this->view('pages/addproduct',$data);
                }
            }
            else {
                $productID=$this->productmodels->Get($id);
                // Load form (page page before the submit)
                $data=[
                    'id' => $productID->id,
                    'name' => $productID->name,
                    'image' => $productID->image,
                    'price' => $productID->price,
                    'quantity' => $productID->quantity,
                    'description' => $productID->description,
                    'name_err' => '',
                    'image_err' => '',
                    'price_err' => '',
                    'quantity_err' => '',
                    'description_err' => ''
                ];
                $this->view('pages/edit',$data);
            }
        }
        public function delete($id){
            if($_SERVER['REQUEST_METHOD']=='GET'){
               
                if($this->productmodels->Delete($id)){
                    redirect('Products/dashboard');
                }
                else{
                    die('Something went wrong');
                }
            }
            else{
                redirect('Products/dashboard');
            }
        }
    }   