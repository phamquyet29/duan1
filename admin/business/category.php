<?php
function cateIndex()
{
     // lấy danh sách danh mục
     $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
     $sql = "SELECT * FROM `category` WHERE categoryName LIKE '%$keyword%'";
     $category = pdo_query($sql);
     // hiển thị view
     adminRender('category/index.php', compact('category','keyword'),'admin-assets/custom/script.js');
 }
 function loadOneCate($id)
 {
     $sql = "SELECT * FROM `category` WHERE id=$id";
     $category = pdo_query_one($sql);
     return $category;  
 }
 function addCate()
 {
   adminRender('category/add.php',[]);
 }
 function loadAllCate()
 {
   $sql = "SELECT * FROM `category`";
   $category = pdo_query($sql);
   return $category;
 }
 function addSave()
 {
  $name = $_POST['name'];
  $sql = "INSERT INTO `category`(`categoryName`) VALUES ('$name') ";
  pdo_query($sql);
  header('location:'. ADMIN_URL . 'danh-muc');
 }
 function cateDelete()
 {
    $id = $_GET['id'];
    $sql = "DELETE FROM `category` WHERE id=$id";
    pdo_query_one($sql);
    header('location:'. ADMIN_URL . 'danh-muc');
 }
 function getCate()
 {
     $id = $_GET['id'];
     $sql = "SELECT * FROM `category` WHERE id=$id";
     $cate = pdo_query_one($sql);
     adminRender('category/update.php', compact('cate'));
 }
 function updateCate()
 {
     $id = $_POST['id'];
     $name = $_POST['name'];
     $sql = "UPDATE `category` SET `categoryName`='$name' WHERE id =$id";
     pdo_execute($sql);
     header("location:" . ADMIN_URL . 'danh-muc');
 }
?>