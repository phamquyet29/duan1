<h1><?= $content?></h1>
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>List Order</h3>
            <form action="" method="get">
                <div class="form-input">
                    <input name="keyword" value="<?= $keyword ?> " type="search" class="outline-none p-1 rounded bg-[#eeeeee] border-2" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class=" bg-[#3c91e6] text-white
                text-[20px] p-[6px] rounded bx bx-search"></i></button>
                </div>
            </form>
            <a href="<?= ADMIN_URL . '/san-pham/them-san-pham' ?>"><i class='text-[20px] bx bx-add-to-queue'></i></a>
        </div>
        <table >
            <thead>
                <tr>
                    <th class="">STT</th>
                    <th class="">ID</th>
                    <th class="">Name</th>
                    <th class="">Phone</th>
                    <th class="">Address</th>
                    <th class="">Email</th>
                    <th class="">Total price</th>
                    <th class="">Status</th>
                    <th class="pl-10">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listInvoices as $index => $inv) : ?>
                    <tr class="m-10">
                    <td class="w-[3%]"><?= $index + 1?></td>
                    <td class="w-[3%]"><?= $inv['id']?></td>
                    <td class="w-[15%]"><?= $inv['customer_name']?></td>
                    <td class="w-[15%]"><?= $inv['customer_phone_number']?></td>
                    <td class="w-[25%]"><?= $inv['customer_address']?></td>
                    <td class="w-[25%]"><?= $inv['customer_email']?></td>
                    <td class="w-[10%] "><?= $inv['total_price']?></td>

                    <?php if($inv['status'] == 1):?>
                    <td class="w-[20%] pr-2 "><p class="py-5">Chờ xác nhận</p></td>
                    <?php endif?>
                    
                    <?php if($inv['status'] == 2):?>
                    <td class="w-[20%] pr-2"><p class="py-5">Đã xác nhận đơn hàng</p></td>
                    <?php endif?>

                    <?php if($inv['status'] == 3):?>
                    <td class="w-[20%] pr-2"><p class="py-5">Đang giao</p></td>
                    <?php endif?>

                    <?php if($inv['status'] == 4):?>
                    <td class="w-[20%] pr-2"><p class="py-5">Giao hàng thành công</p></td>
                    <?php endif?>

                    <?php if($inv['status'] == 5):?>
                    <td class="w-[20%] pr-2"><p class="py-5">Giao hàng thất bại</p></td>
                    <?php endif?>

                    <?php if($inv['status'] == 6):?>
                    <td class="w-[20%] pr-2"><p class="py-5">Hủy đơn</p></td>
                    <?php endif?>

                    <td class="pl-14"><button><a href="<?= ADMIN_URL . 'chi-tiet-don-hang?id=' . $inv['id'] ?>"><i class='bx bxs-cog text-[25px]'></i></a></button></td>
                </tr>
                    <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
