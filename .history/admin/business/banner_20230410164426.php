<?php
function bannerIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    $sql = "SELECT * FROM `banner` WHERE id LIKE '%$keyword%'";
    $banner = pdo_query($sql);
    // dd($banner);
    adminRender('/index.php',compact('banner','keyword'));
}
function updateBanner()
{
    $id = $_GET['id'];
    $banner = $_POST['image'];

    if(empty($_FILES["new-image"]["name"])){ 
    $banner = $_POST["old-image"];
     }else{ 
    $banner =  $_FILES["new-image"]["name"]; 
    move_uploaded_file($_FILES["new-image"]["tmp_name"],"./public/upload/".$_FILES["new-image"]["name"]);
}
   $sql = "UPDATE `banner` SET `id`='$id',`image`=' $banner' WHERE 1";
   header('location:'. ADMIN_URL . 'banner');
}
function getBanner(){

      $id = $_GET['id'];
      $sql = "SELECT * FROM `banner` where id=$id";
      $ban = pdo_query_one($sql);
      adminRender('product/update.php', compact('ban'));
}
function addbanner()
{
  adminRender('banner/add.php',[]);
}
?>