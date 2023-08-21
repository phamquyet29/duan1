<?php
    function listcomment(){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
        $sql = "SELECT * FROM `binhluan` WHERE id LIKE '%$keyword%'";
        $listbl = pdo_query($sql);
        // hiển thị view
    adminRender('comment/index.php', compact('listbl','keyword'),'admin-assets/custom/script.js');
}

function loadall_binhluan($idpro){
    $sql="select * from binhluan where 1";
    if($idpro>0) $sql.=" AND idpro='".$idpro."'";
    $sql.=" order by id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function Deletebinhluan()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `binhluan` WHERE id=$id";
    pdo_query_one($sql);
    header('location:'. ADMIN_URL . 'binh-luan');
 }
 function updatebinhluan()
 {
      $noidung = $_POST['noidung'];
      $sql = "UPDATE `binhluan` SET `noidung`='$noidung'";
      pdo_execute($sql);
      header("location:" . ADMIN_URL . 'binh-luan');
     }
     function getbinhluan()
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM `binhluan` WHERE id=$id";
    $ac = pdo_query_one($sql);
    adminRender('comment/update.php', compact('ac'));
}
?>