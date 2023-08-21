<?php
function proIndex(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
/* Executing the query and returning the results as an array. */
    $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$keyword%'";      
    $products = pdo_query($sql);
    // hiển thị view
    adminRender('product/index.php',compact('products','keyword'));
}
function proDelete(){
    $id = $_GET['id'];
    $sql = "DELETE FROM `products` WHERE id=$id";
    pdo_query_one($sql);
    header('location:'. ADMIN_URL . 'san-pham');
 }
function addPro(){
    adminRender('product/add.php');
  }
  function addSavePro(){
    $id = $_POST['id'];
    $productName = $_POST["name"];
    $productDesc = $_POST["desc"];
    $productPrice = $_POST["price"];
    $categoryId = $_POST["cateid"];
    $discount  = $_POST['discount'];
    $view = $_POST['view'];
    $status = $_POST['status'];
    $size = $_POST['size'];
    $file = $_FILES['image'];
    $filename = "";
      if ($file['size'] > 0) {
          $filename = uniqid() . '-' . $file['name'];
          move_uploaded_file($file['tmp_name'], './public/upload/' . $filename);
          $filename = 'upload/'. $filename;
      } 

    $sql = "INSERT INTO `products`(`id`, `name`, `image`, `desc`, `id_category`, `price`, `view`, `discount`, `status`, `size`) VALUES ('$id','$productName','$filename','$productDesc','$categoryId','$productPrice','$view','$discount','$status','$size')";
    move_uploaded_file($_FILES["image"]["tmp_name"],"./public/upload/".$_FILES["image"]["name"]);
    pdo_execute($sql); 
    header('location:'. ADMIN_URL . '/san-pham'); 
  }
  function loadOneProduct()
  {
      $id = $_GET['id'];
      $sql = "select * from products where id=$id";
      $pro = pdo_query_one($sql);
      $category = loadAllCate();
      adminRender('product/update.php', compact('pro', 'category'));
  }
  function updatePro(){
  if (isset($_POST['btn'])) {
  $id = $_POST['id'];
  $productName = $_POST["name"];
  $productDesc = $_POST["desc"];
  $productPrice = $_POST["price"];
  $categoryId = $_POST["cateid"];
  $view = $_POST['view'];
  $discount  = $_POST['discount'];
  $status = $_POST['status'];
  $file = $_FILES['image'];
  $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'],'./public/upload/'.$filename);
        $filename ='upload/'.$filename;
    } 
    if ($filename != "") {
   $sql = "UPDATE `products` SET `id`='$id',`name`=' $productName',`image`='$filename',`desc`='$productDesc',`id_category`='$categoryId',`price`='$productPrice',`view`=' $view' , `discount` = $discount , `status` = $status  WHERE id=$id";
    }else {
      $sql = "UPDATE `products` SET `id`='$id',`name`=' $productName',`desc`='$productDesc',`id_category`='$categoryId',`price`='$productPrice',`view`=' $view' ,`discount` = $discount,`status` = $status WHERE id=$id";
    }
  }
  pdo_execute($sql);
  // dd($sql);
  header("location:" . ADMIN_URL . 'san-pham');
  }