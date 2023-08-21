<?php
function bannerIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    $sql = "SELECT * FROM `banner` WHERE id LIKE '%$keyword%'";
    $banner = pdo_query($sql);
    // dd($banner);
    adminRender('banner/index.php',compact('banner','keyword'));
}
function uploadBanner(){
  adminRender('banner/update.php');
}
function updateBanner()
{
    $id = $_GET['id'];
    $banner = $_POST['banner'];

    if(empty($_FILES["new-banner"]["name"])){ 
    $banner = $_POST["old-banner"];
     }else{ 
    $banner =  $_FILES["new-banner"]["name"]; 
    move_uploaded_file($_FILES["new-image"]["tmp_name"],"./public/upload/".$_FILES["new-image"]["name"]);
}
   $sql = "UPDATE `banner` SET `id`='$id',`image`=' $banner' WHERE $id";
   
   header('location:'. ADMIN_URL . 'banner');
}
function getBanner(){

      $id = $_GET['id'];
      $sql = "SELECT * FROM `banner` where id=$id";
      $ban = pdo_query_one($sql);
      adminRender('product/update.php', compact('ban'));
}

?>