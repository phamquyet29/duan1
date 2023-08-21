<?php
function orderIndex(){
     $content = 'Quản lý đơn hàng';
     $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : ''; 
     $sql = "SELECT * FROM `invoices` WHERE `customer_name` LIKE '%$keyword%'";
     $listInvoices = pdo_query($sql);
     // dd($listInvoices);
     adminRender('orders/index.php',compact('content','listInvoices','keyword'));
}
function detailOrder(){
     $id = isset($_GET['id']) ? $_GET['id'] : "";

	$inv = "SELECT * FROM `invoices` WHERE id = $id ";
     $invUser = pdo_query($inv);

     $invDetail = "SELECT * FROM `invoices_detail` id JOIN products sp ON id.product_id = sp.id WHERE id.invoice_id = $id";
     $productInv = pdo_query($invDetail);
     // dd($productInv);

     adminRender('orders/detail.php',compact('invUser','productInv'));
}
function updateStatus() {
     if(isset($_POST['btn'])){
     $id = $_POST['id'];
     $status = $_POST['status'];
     $update_at = date('Y-m-d H:s:i');
     $sql = "UPDATE `invoices` SET `status`='$status' , update_at = '$update_at' WHERE id=$id";
     pdo_execute($sql);
     header("location:" . ADMIN_URL . 'quan-ly-hoa-don');
     } 
}
?>