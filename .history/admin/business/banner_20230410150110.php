<?php
function bannerIndex(){
   
}
function addSavebanner()
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