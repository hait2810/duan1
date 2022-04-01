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
 
    updateView($view,$id_detail);
    $similarProduct = similarProduct($showDetailProduct1[0]['idcategory']);
   
    $view = "detail.php";
}
if(isset($_GET['category'])) {
    $idcategory = $_GET['category'];
    $showCategory = detailCategorys($idcategory);
   
    $view = "detailproducts.php";
}
if(isset($_GET['key'])){
    $keya = $_GET['key'];
    $search = searchProducts($key);
    print_r($search);
    $view = "search.php";
    
}

include "./layout/tpl.php";
?>