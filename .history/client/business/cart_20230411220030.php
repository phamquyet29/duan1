<?php
//thêm sản phẩm vào giỏ hàng
function add2Cart(){
    $pId = $_GET['id'];
    // lấy thông tin sản phẩm
    $getProductByIdQuery = "SELECT * FROM `products` WHERE id = $pId";
    $product = pdo_query_one($getProductByIdQuery);
    if(!$product){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    // kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
    $existedIndex = -1;
    foreach ($cart as $index => $item) {
        if($item['id'] == $product['id']){
            $existedIndex = $index;
            break;
        }
    }
    // nếu có rồi thì cộng thêm 1 đơn vị vào quantity
    if($existedIndex != -1){
        $cart[$existedIndex]['quantity']++;
    }else{
        // nếu chưa có thì thêm vào giỏ với quanity mặc định = 1
        $product['quantity'] = 1;
        $cart[] = $product;
    }
    $_SESSION['cart'] = $cart;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die;
}
function checkOut(){
    if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
        header('location:' . BASE_URL . 'khong-tim-thay');
    }
    $cart = $_SESSION['cart'];
    clientRender('cart/cart.php',compact('cart'));
}
function payCart(){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $created_at = $updated_at = date('Y-m-d H:s:i');
    //insert dữ liệu tạo hóa đơn
    $createInvoiceQuery = "INSERT INTO `invoices` (customer_name,customer_phone_number,customer_email,customer_address,note,created_at,update_at) VALUES ('$name',$phone,'$email','$address','$note','$created_at','$updated_at')";
    $invoiceId = insertDataAndGetId($createInvoiceQuery);
    //chạy vòng lặp qua các phần tử của giỏ hàng , sau đó insert dữ liệu vào bảng invoices_detail 
    foreach($_SESSION['cart'] as $item){
        $productId = $item['id'];
        $price = $item['price'];
        $quantity = $item['quantity'];
        $totalPrice += $price*$quantity;
        $inserInvoiceDetailQuery = "INSERT INTO `invoices_detail` (invoice_id,product_id,quantity,unti_price) VALUES ($invoiceId,$productId,$quantity, $price)"; 
        pdo_execute($inserInvoiceDetailQuery);
    }
    //Cập nhật tổng tiền hóa đơn
    $updateTotalPrice = "UPDATE `invoices` SET total_price = $totalPrice WHERE id=$invoiceId";
    pdo_execute($updateTotalPrice);
    unset($_SESSION['cart']);
    header('location:' . BASE_URL );
}
function formCheckOut(){
    clientRender('cart/checkout.php');
}
function seachOder() {
    if (isset($_POST) && isset($_POST['seach-order'])) { 
    $email = $_POST['customer_email'];
    $phone = $_POST['customer_phone_number'];
    $sql = "SELECT * FROM `invoices` WHERE `customer_email` LIKE '%$email%' AND `customer_phone_number` LIKE '%$phone%' ";
    $result = select_page($sql);
    // dd($seach);
        $_SESSION['invoices'] = $result;
    // dd($_SESSION['invoices']);
    header("Location: " . BASE_URL . 'san-pham-da-mua');
    }
    clientRender('cart/seach.php');
}
function ordered(){
    clientRender('cart/booked.php');
}
function deleteProductInCart(){
    unset($_SESSION['cart']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
function updateClientStatus() {
    if(isset($_POST['btn'])){
    $id = $_POST['id'];
    $status = $_POST['status'];
    $update_at = date('Y-m-d H:s:i');
    $sql = "UPDATE `invoices` SET `status`='$status' , update_at = '$update_at' WHERE id=$id";
    pdo_execute($sql);
    header("location:" . BASE_URL . 'san-pham-da-mua');
    } 
}

function clientDetailOder(){
    $id = isset($_GET['id']) ? $_GET['id'] : "";
	$inv = "SELECT * FROM `invoices` WHERE id = $id ";
    $invUser = pdo_query($inv);
    $invDetail = "SELECT * FROM `invoices_detail` id JOIN products sp ON id.product_id = sp.id WHERE id.invoice_id = $id";
    $productInv = pdo_query($invDetail);
    //  dd($productInv);
     clientRender('cart/detailOrders.php',compact('invUser','productInv'));
 }
function success(){
    clientRender('home/thank.php');
}
// $sql = "SELECT * FROM `invoices` WHERE customer_email LIKE '%$email%' AND customer_phone_number LIKE '%$phone%' ";
?>