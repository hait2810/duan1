<?php 
include "./dao/db.php";
include "./global.php";
include "./dao/account.php";
include './dao/showhome.php';


$view = "home.php";
extract($_REQUEST);

if(isset($logout)) {
    session_destroy();
    header("location: ".$ROOT."");
    exit;
}else if(isset($login)){
    if(isset($btn_submit)){
        $login = login($email,$password);
       
        if($login['email']) {
            $_SESSION['id'] = $login['id'];
            $_SESSION['email'] = $login['email'];
            $_SESSION['roleId'] = $login['roleId'];
            $_SESSION['fullname'] = $login['fullname'];
            header("location: ".$ROOT."/index.php");
            die;
        }
    }
    $view = "login.php";
   
}

else if(isset($register)) {
    if(isset($btn_submit)){
        if($email == "haibrave@gmail.com"){
            $roldId = 1;
        }else {
            $roldId = 2;
        }
        $reg = register($fullname,$email,$password,$roldId);
        if($reg == 1) {
            $kq = "Đăng ký thành công";
        }else{
            $kq = "Thất bại";
        }
    }   
    $view = "register.php";   
}



if(isset($_GET['detail'])) {

    $id_detail = $_GET['detail'];
    $showDetailProduct1 = showDetailProduct($id_detail);
    $view = $showDetailProduct1[0]['view'] + 1;
    $ai = intval($showDetailProduct1[0]['sale']);
                       
    $percent = ($ai/100)*$showDetailProduct1[0]['price'];
     $pricenew = $showDetailProduct1[0]['price'] - $percent;
     
    updateView($view,$id_detail);
    $similarProduct = similarProduct($showDetailProduct1[0]['idcategory']);
    if(isset($_POST['btn_cmt'])) {
       $iduser =  $_SESSION['id'];
      
        
     addCmt($content,$iduser,$id_detail);
     
    }
    if(isset($_POST['addcart'])){
        $item = [
            'id' => $id_detail,
            'name'=> $showDetailProduct1[0]['name'],
            'img' => $showDetailProduct1[0]['images'],
            'price' => $pricenew,
            'quantity' => $_POST['quantity'],
            'size' => $_POST['sizes'],

        ];

        if(isset($_SESSION['carts'][$id_detail])){
            if($_SESSION['carts'][$id_detail]['size'] == $_POST['sizes'] ){
                $_SESSION['carts'][$id_detail]['quantity'] += $_POST['quantity'];
                header("location: ?cart ");
            }else{
                    exit("Sản phẩm đã tồn tại trong giỏ hàng");
            }
        }else{
            $_SESSION['carts'][$id_detail] = $item;
            header("location: ?cart ");
        }
        
        
     } 
    $view = "detail.php";
}
if(isset($_GET['category'])) {
    $idcategory = $_GET['category'];
    $showCategory = detailCategorys($idcategory);
   
    $view = "detailproducts.php";
}
if(isset($_GET['key'])){
    $key = '%'.$_GET['key'].'%';
    $kq = $_GET['key'];
    $search = searchProducts($key);
   
    $view = "search.php";
    
}

if(isset($_GET['sale'])) {
    $productSale = productSale();

    $view = "sale.php";
}

if(isset($_GET['hot'])) {

    $view = "hot.php";
}
if(isset($_GET['cart'])) {
    if(isset($_GET['delete_cart'])) {
        $idcart = $_GET['delete_cart'];
        unset($_SESSION['carts'][$idcart]);
        header("location: ?cart ");
    }else if(isset($_POST['updateproduct'])){
       
            //print_r($quantity);die();
     
    foreach($quantity as $k=>$v){
        
        if($v < 1 ){
            unset($_SESSION['carts'][$k]);
        }else {
            $_SESSION['carts'][$k]['quantity'] = $v;
        }
       
        }
            //die(1);
      
        
    }else if(isset($_POST['btn_order'])){
       
        if(empty($_POST['name'])){
            echo '<a href="?cart">Quay lại</a>';
           exit("Bạn chưa nhập tên người nhận"); 
        }else if(empty($_POST['phone'])){
            echo '<a href="?cart">Quay lại</a>';
            exit("Bạn chưa nhập SDT người nhận");      
         }else if(empty($_POST['address'])){
            echo '<a href="?cart">Quay lại</a>';
           exit("Bạn chưa nhập địa chỉ người nhận");   
         }else if(empty($_POST['quantity'])){
            echo '<a href="?cart">Quay lại</a>';
            exit("Giỏ hàng rỗng");
         }
      
         
        
       $products = getProductbyId(implode(',',array_keys($_POST['quantity'])));
       
     
         
      $tong = 0;
     
   foreach ($products as $key => $value) {
    
   
      $prices = (intval($value['sale'])/100) * $value['price']; // tính phần trăm
        $amount = $value['price'] - $prices; // giá - phần trăm
  
     $tong +=  $amount * $_POST['quantity'][$value['id']];
    
   }
   
   
   $order = addOrder($name,$_POST['phone'],$_POST['address'],$_POST['note'],$tong);

   
  


   
     
  


   foreach ($products as $key => $value) {
    $prices1 = (intval($value['sale'])/100) * $value['price']; // tính phần trăm
    $amount = ($value['price'] - $prices1)*$_POST['quantity'][$value['id']]; // giá - phần trăm
    addDetailOrder($order,$value['id'],$_POST['quantity'][$value['id']],$amount);
    unset($_SESSION['carts']);
    echo 'Cảm ơn bạn đã mua hàng.<a href="?cart">Tiếp tục mua hàng</a>';
    exit;
   }
   

  
   
       
    }
    $view = "cart.php";
}
include "./layout/tpl.php";
