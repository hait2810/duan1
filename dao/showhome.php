<?php 
function showProductNew() {
    $sql = "SELECT * FROM products LIMIT 8";
    return pdo_query($sql);
}
function showCategoryHome() {
    $sql = "SELECT * FROM categorys";
    return pdo_query($sql);
}

?>