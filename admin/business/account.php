<?php 
    function indexAccount(){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
        $sql = "SELECT * FROM `taikhoan` WHERE user LIKE '%$keyword%'";
        $account = pdo_query($sql);
        // hiển thị view
        adminRender('account/index.php', compact('account','keyword'),'admin-assets/custom/script.js');
    }
    
    function DeleteAccount()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `taikhoan` WHERE id=$id";
    pdo_query_one($sql);
    header('location:'. ADMIN_URL . 'khach-hang');
 }

    function getAccount()
{
    
    $id = isset($_GET['id']) ? $_GET['id'] : "";
     $sql = "SELECT * FROM `taikhoan` WHERE id=$id";
     $ac = pdo_query_one($sql);
     adminRender('account/update.php', compact('ac'));
 }
     function updateAccount()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
     $id = $_POST['id'];
     $name = $_POST['user'];
     $pass = $_POST['pass'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $phone = $_POST['tel'];
     $role = $_POST['role'];
     $sql = "UPDATE `taikhoan` SET `user`='$name',`pass`='$pass',`email`='$email',`address`='$address',`tel`='$phone',`role`='$role' WHERE id =$id";
     pdo_execute($sql);
     header("location:" . ADMIN_URL . 'khach-hang');
    }
    function addSaveAccount()
 {
    $name = $_POST['user'];
     $pass = $_POST['pass'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $phone = $_POST['tel'];
     $role = $_POST['role'];
    $sql = "INSERT INTO `taikhoan`(`user`,`pass`,`email`,`address`,`tel`,`role`) VALUES ('$name','$pass','$email','$address','$phone','$role') ";
    pdo_query($sql);
    header('location:'. ADMIN_URL . 'khach-hang');
 }
 function addAccount()
 {
   adminRender('account/add.php',[]);
 }
?>