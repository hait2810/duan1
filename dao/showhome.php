<?php 
function showProductNew() {
    $sql = "SELECT * FROM products LIMIT 8";
    return pdo_query($sql);
}
function showCategoryHome() {
    $sql = "SELECT * FROM categorys";
    return pdo_query($sql);
}

function showDetailProduct($id) {
    $sql = "SELECT * FROM products WHERE id=?";
    return pdo_query($sql,$id);
}
function updateView($view,$id) {
    $sql = "UPDATE products SET view=? WHERE id=?";
    return pdo_execute($sql,$view,$id);
}
function similarProduct($idcategory) {
    $sql = "SELECT * FROM products  WHERE idcategory=? LIMIT 4";
    return pdo_query($sql,$idcategory);
}
function detailCategorys($idcategory) {
    $sql = "SELECT * FROM products WHERE idcategory=?";
    return pdo_query($sql,$idcategory);
}
function searchProducts($key) {
    $sql = "SELECT * FROM products WHERE name LIKE ?";
    return pdo_query($sql,$key);
}
function addCmt($content,$iduser,$idproduct) {
    $sql = "INSERT INTO comments(content,iduser,idproduct) VALUES(?,?,?)";
    return pdo_execute($sql,$content,$iduser,$idproduct);
}
function showCmt($idproduct) {
    $sql = "SELECT * FROM comments cmt INNER JOIN users us ON cmt.iduser = us.id WHERE idproduct=?";
    return pdo_query($sql,$idproduct);
}
?>