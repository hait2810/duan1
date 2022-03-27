<?php 
function addcategory($name) {
    $sql = "INSERT INTO categorys(name) VALUES(?)";
    return pdo_execute($sql,$name);
}
function addproduct($name,$price,$sale,$images,$images1,$images2,$view,$description,$idcategory){
    $sql = "INSERT INTO products(name,price,sale,images,images1,images2,view,description,idcategory) VALUES(?,?,?,?,?,?,?,?,?)";
    return pdo_execute($sql,$name,$price,$sale,$images,$images1,$images2,$view,$description,$idcategory);
}
function showcategorys() {
    $sql = "SELECT * FROM categorys";
    return pdo_query($sql);
}
function showproducts() {
    $sql = "SELECT * FROM products";
    return pdo_query($sql);
}
function showDetailProduct($id) {
        $sql = "SELECT * FROM products WHERE id=?";
        return pdo_query($sql,$id);
}
function updateProduct($name,)
?>