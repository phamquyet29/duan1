<?php
function getAllCate(){
    $sql = "SELECT * FROM `category`";
    $listCategory = pdo_query($sql);
    return $listCategory;
}
function loadOneCateDetail($id)
 {
     $sql = "SELECT * FROM `category` WHERE id=$id";
     $category = pdo_query_one($sql);
     return $category;  
 }
?>
