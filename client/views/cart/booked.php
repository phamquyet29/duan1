
<h1 class="text-center text-[30px] font-bold">Ordered</h1>

<?php foreach($_SESSION['invoices'] as $index => $inv) : ?>
<div class="list-item border-[1px] border-solid my-5 bg-zinc-100 rounded ">
<div class="item py-2">
    <div class="id-item inline ">ID: <b class="text-red-500"><?= $inv['id']?></b></div>
    <?php if($inv['status'] == 1):?>
    <div class=""><p class="p-1 bg-yellow-200 text-yellow-500  font-bold rounded"><i class='bx bx-message-dots' ></i> Chờ xác nhận</p></div>
   <?php endif?>
                    
    <?php if($inv['status'] == 2):?>
    <div class=""><p class="p-1 bg-blue-200 text-blue-500  font-bold rounded"><i class='bx bx-check'></i> Đã xác nhận đơn hàng</p></div>
    <?php endif?>

    <?php if($inv['status'] == 3):?>
    <div class=""><p class="p-1 bg-orange-200 text-orange-500  font-bold rounded"><i class='bx bxs-plane-alt'></i> Đang giao</p></div>
    <?php endif?>

    <?php if($inv['status'] == 4):?>
    <div class=""><p class="p-1 bg-green-200 text-green-500  font-bold rounded"><i class='bx bx-check'></i> Giao hàng thành công</p></div>
    <?php endif?>

    <?php if($inv['status'] == 5):?>
    <div class=""><p class="p-1 bg-red-200 text-red-500  font-bold rounded"><i class='bx bx-x' ></i> Giao hàng thất bại</p></div>
    <?php endif?>

    <?php if($inv['status'] == 6):?>
    <div class=""><p class="p-1 bg-red-300 text-red-700  font-bold rounded"><i class='bx bx-x' ></i> Hủy đơn</p></div>
    <?php endif?>
    <div class="">Date : <b><?= $inv['created_at']?></b></div>
    <div class="">Last update : <b><?= $inv['update_at']?></b></div>
    <div class="">Total: <b> <?= number_format($inv['total_price'])?></b>đ</div>

  <a class="w-28 underline py-1 px-1 text-black " href="<?= BASE_URL . 'chi-tiet-hoa-don?id=' . $inv['id'] ?>">View detail</a>
</div>
</div>
<?php endforeach?>
