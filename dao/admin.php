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
function updateProduct($name,$price,$sale,$images,$images1,$images2,$description,$idcategory,$idsp){
        $sql = "UPDATE products SET name=?,price=?,sale=?,images=?,images1=?,images2=?,description=?,idcategory=? WHERE id=?";
        return pdo_execute($sql,$name,$price,$sale,$images,$images1,$images2,$description,$idcategory,$idsp);
}
function updateCategory($name,$id) {
    $sql = "UPDATE categorys SET name=? WHERE id=?";
    return pdo_execute($sql,$name,$id);
}
function showDetailCategory($id) {
    $sql = "SELECT * FROM categorys WHERE id=?";
    return pdo_query($sql, $id);
}
?>