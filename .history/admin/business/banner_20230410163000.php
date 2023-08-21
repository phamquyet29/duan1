<?php
function bannerIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    $sql = "SELECT * FROM `banner` WHERE id LIKE '%$keyword%'";
    $listbanner = pdo_query($sql);
    adminRender('banner/index.php',compact('listbanner','keyword'),'admin-assets/custom/script.js');
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
function addbanner()
{
  adminRender('banner/add.php',[]);
}
?>