<?php
function bannerIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    $sql = "SELECT * FROM `banner` WHERE id LIKE '%$keyword%'";
    $banner = pdo_query($sql);
    // dd($banner);
    adminRender('banner/index.php',compact('banner','keyword'));
}
function uploadBanner(){
  $id = $_GET['id'];
  $sql = "SELECT * FROM `banner`";
  $banner = pdo_query($sql);
  adminRender('banner/update.php',compact('banner'));
}
function updateBanner()
{
    $id = $_GET['id'];

    if(empty($_FILES["new-image"]["name"])){ 
    $banner = $_POST["old-image"];
    } else { 
    $banner =  $_FILES["new-image"]["name"]; 
    move_uploaded_file($_FILES["new-image"]["tmp_name"],"./public/upload/".$_FILES["new-image"]["name"]);
}
   $sql = "UPDATE `banner` SET `image`=' $banner' WHERE id=$id";
   pdo_execute($sql);
   header('location:'. ADMIN_URL . 'banner');
}


?>