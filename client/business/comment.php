<?php
 function form_binhluan(){
    clientRender('product/detail.php');
}
function getallcomment(){
    $sql = "SELECT * FROM `binhluan`";
    $listbl = pdo_query($sql);
    return $listbl;
//     clientRender('product/detail.php',compact('listbl'));
 }
 function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql="INSERT INTO binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}
function binhluan(){
    if (isset($_POST['binhluan'])&&($_POST['binhluan'])) {
      $noidung=$_POST['noidung'];
      $iduser=$_POST['iduser'];
      $idpro=$_POST['idpro'];
      $ngaybinhluan=$_POST['ngaybinhluan'];
      insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
      header('location:' . BASE_URL . 'form-binhluan');
  }

  }
?>