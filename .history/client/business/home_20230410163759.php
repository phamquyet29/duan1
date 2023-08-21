<?php

function home($number){
    $sql = "SELECT * FROM `products` ORDER BY view DESC LIMIT $number";

    $sqlBanner = "SELECT * FROM `banner`";
    clientRender('home/index.php',compact('banner','keyword'));
    $products = pdo_query($sql);
    $banner = pdo_query($sql);
    // dd($products);
    /*hàm compact chuyển biến thành key(thành giá trị value trong 1 mảng)*/
    clientRender('home/index.php',compact('products','banner'));
}
function favourite() {
    $id = $_GET['id'];
    $userId = $_SESSION['user']['id'];
    //kiểm tra sản phẩm đã được thêm vào yêu thích hay chưa 
    $sql = "SELECT * FROM favorite WHERE `user_id`=$userId AND `product_id`=$id";
    $favourite = pdo_query($sql);

    if(!$favourite){
    $time = date("Y-m-d h:i:s");
    $sql = "INSERT INTO favorite (`user_id`, `product_id`, `created_at`) VALUES ($userId,$id, '$time')";
    // dd($sql);
    pdo_execute($sql);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
function showProductFvr(){
    $sql = "SELECT yt.*,pr.name,pr.price,pr.status,pr.image FROM favorite yt JOIN products pr ON pr.id = yt.product_id JOIN taikhoan us on yt.user_id = us.id WHERE 1 ORDER BY id ASC";
    $listFvr = pdo_query($sql);
    // dd($listFvr);
    clientRender('./product/favourite.php',compact('listFvr'));
}
function deleteFavorite()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `favorite` where id = $id";
    pdo_query_one($sql);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
function renderEmty(){
    clientRender('home/emty.php');
}
?>