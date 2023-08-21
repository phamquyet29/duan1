<?php
function loadAllProduct()
{
  $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
  $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$keyword%'";
  $products = pdo_query($sql);
  // hiển thị view
  clientRender('product/index.php', compact('products', 'keyword'));
}

// -----đếm tổng số sản phẩm---------
function countProduct()
{
  $sql = "SELECT COUNT(*) AS SUM FROM `products`";
  $amountProduct = pdo_query($sql);
  return $amountProduct;
}

function getSomeProduct($start, $end)
{
  $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
  $sql = "SELECT * FROM `products` WHERE `name` LIKE '%$keyword%' ORDER BY id DESC LIMIT " . $start . "," . "$end";
  $listProduct = pdo_query($sql);
  $countProduct = countProduct();
  $listCategory = getAllCate();
  clientRender('product/index.php', compact('listProduct', 'countProduct', 'keyword', 'listCategory'));
}
//----------điều kiện ----------
function Paging()
{
  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 1;
  }
  if ($page == 1 || $page < 1) {
    $start = 0;
    $end = 10;
  } else {
    $start = ($page * 10) - 10;
    $end = $page * 10;
  }
  getSomeProduct($start, $end);
}

function detailProduct()
{
  $id = $_GET['id'];
  $sql = "SELECT * FROM products where id=$id";
  $pro = pdo_query_one($sql);
  $id_category = $pro['id_category'];
  $sqlcm = "SELECT * FROM products WHERE id_category = '$id_category' AND id != '$id' limit 5";
  $listgeneral = pdo_query($sqlcm);
  clientRender('product/detail.php', compact('pro','listgeneral'));
}
function searchByCategory($id)
{
  $sql = "SELECT * FROM `products` WHERE id_category=" . $id;
  // dd($sql);
  $amountProduct = pdo_query($sql);
  // dd($amountProduct);
  return $amountProduct;
}
function filter()
{
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  };
  $listProduct = searchByCategory($id);
  //lọc xong render lại
  $listCategory = getAllCate();
  clientRender('product/fillter.php', compact('listProduct', 'listCategory'));
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