<?php
function size(){
    $sql = "SELECT * FROM `size`";
    $size = pdo_query($sql);
    return $size;
}
?>