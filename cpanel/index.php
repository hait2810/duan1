<?php 
include "../dao/db.php";
include "../global.php";
include "../dao/admin.php";
$view = "show.php";
extract($_REQUEST);


if(isset($_GET['add'])){
    if(isset($addproduct)){
        $images = upload_file('images','../assets/images/');
        $images1 = upload_file('images1','../assets/images/');
        $images2 = upload_file('images2','../assets/images/');
        $addproduct = addproduct($name,$price,$sale,$images,$images1,$images2,$view,$description,$idcategory);
        if($addproduct == 1) $kq = "Thành công"; else $kq = $addproduct;
    }else if(isset($btn_category)){
        $addcategorys = addcategory($name);
        if($addcategorys == 1) $kq = "Thành công"; else $kq = $addcategorys;
    }

    $view = "add.php";
}


if(isset($_GET['edit'])){
    if($_GET['btn_sp']){
        $id = $_GET['btn_sp'];
        $showDetailProduct = showDetailProduct($id);
    }else if(isset($_POST['editproduct'])){
        
    }
    $view = "edit.php";
}


include "./tpl.php";
?>