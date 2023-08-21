<?php
function dashboardIndex(){
    $chart = "SELECT `category`.*, COUNT(products.id_category) AS 'number_cate' FROM `products` INNER JOIN `category` ON products.id_category = category.id GROUP BY products.id_category;";
    $chartCate = pdo_query($chart);
    //-----tổng sản phẩm--------
    $countPro = "SELECT COUNT(*) AS SUM FROM `products`";
    $amountProduct = pdo_query_value($countPro);
    // -----tổng danh mục--------
    $countCate = "SELECT COUNT(*) AS SUM FROM `category`";
    $amountCate = pdo_query_value($countCate);
    adminRender('dashboard/index.php',compact('chartCate','amountProduct','amountCate'));
}
