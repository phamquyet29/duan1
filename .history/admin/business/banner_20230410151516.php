<?php
function bannerIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
    $sql = "SELECT * FROM `banner` WHERE id LIKE '%$keyword%'";
    $listbanner = pdo_query($sql);
     adminRender('banner/index.php',compact('listbanner','keyword'),'admin-assets/custom/script.js');
}
function ()
{
   $image = $_POST['image'];
   $sql = "INSERT INTO `banner`(`image`) VALUES ('$image') ";
   pdo_query($sql);
   header('location:'. ADMIN_URL . 'banner');
}
function addbanner()
{
  adminRender('banner/add.php',[]);
}
?>