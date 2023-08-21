<?php
function bannerIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    $sql = "SELECT * FROM `banner` WHERE id LIKE '%$keyword%'";
    $listbanner = pdo_query($sql);
     adminRender('banner/index.php',compact('listbanner','keyword'),'admin-assets/custom/script.js');
}
function updateBanner()
{
   $image = $_POST['image'];
   if(empty($_FILES["new-image"]["name"])){ 
    $productImage = $_POST["old-image"];
     }else{ 
    $productImage =  $_FILES["new-image"]["name"]; 
    move_uploaded_file($_FILES["new-image"]["tmp_name"],"../image/".$_FILES["new-image"]["name"]);//thực hiện chuyển file từ thư mục tạm vào thư mục image
}
   header('location:'. ADMIN_URL . 'banner');
}
function addbanner()
{
  adminRender('banner/add.php',[]);
}
?>