<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>List product</h3>
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
                    <th class="">ID</th>
                    <th class="">Name</th>
                    <th class="">Image</th>
                    <th class="">Desc</th>
                    <th class="">Price</th>
                    <th class="">Discount</th>
                    <th class="">Category</th>
                    <th class="">View</th>
                    <th class="">Status</th>
                    <th class="">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $pro) : ?>
                    <tr class="p-[100000px]">
                        <td class="w-[5%]"><?= $pro['id'] ?></td>
                        <td class="short w-[75%]"><p><?= $pro['name'] ?></p></td>
                        <td class="w-[10%]"><img src="<?= PUBLIC_URL . $pro['image'] ?>"  alt=""></td>
                        <td class="short pr-20">
                            <p><?= $pro['desc']?></p>
                        </td>
                        <td><p class="w-[10%] pr-10"><?= $pro['price'] ?></p></td>
                        <td><p class="pr-16"><?= $pro['discount'] ?></p></td>
                        <td class=" pr-10">
                            <?php
                            $id = $pro['id_category'];
                            $categori = loadOneCate($id);
                            echo $categori['categoryName'];
                            ?>
                        </td>
                        <td class="pr-10">
                            <?= $pro['view']?>
                        </td>
                        <td class="pr-10"><?php echo $pro['status'] == 1 ? 'Hết hàng' : 'Còn hàng' ?></td>
                        <td class="w-[9%]">
                            <a href="javascript:;" onclick="confirmRemove('<?= ADMIN_URL . 'san-pham/xoa?id=' . $pro['id'] ?>', '<?= $pro['name'] ?>')"><button class="border-2 border-red-500 rounded bg-red-500"><i class='text-[20px] p-2 bx bx-trash'></i></button></a>
                            <a href="<?= ADMIN_URL . 'san-pham/get-san-pham?id=' . $pro['id'] ?>"><button class="border-2 border-green-500 rounded bg-green-500 "><i class='text-[20px] p-2 bx bxs-edit'></i></button></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
