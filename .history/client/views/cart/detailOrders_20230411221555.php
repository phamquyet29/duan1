
    <div class="w-full">
        <h1 class="">Customer information</h1>
        <div class="info">
            <?php foreach ($invUser as $user) : ?>
                <p class="text-[20px] font-bold">Name : <?= $user['customer_name'] ?></p>
                <p class="text-[15px] font-bold">Phone : <?= $user['customer_phone_number'] ?></p>
                <p class="text-[15px] font-bold">Address : <?= $user['customer_address'] ?></p>
                <p class="text-[15px] font-bold">Email : <?= $user['customer_email'] ?></p>
                <p class="text-[15px] font-bold">Created at : <?= $user['created_at'] ?></p>
                <p class="text-[15px] font-bold">Update at : <?= $user['update_at'] ?></p>
            <?php endforeach ?>
        </div>

<div class="product py-10">
    <table class="w-full">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody class="text-center mx-auto">
        <?php foreach ($productInv as $index => $detail) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $detail['name'] ?></td>
                <td><img class="w-22" src="<?= PUBLIC_URL . $detail['image'] ?>" alt=""></td>
                <td><?= $detail['quantity'] ?></td>
                <td><?= number_format($detail['unti_price'])?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
   <div class="status-inv flex justify-between mx-10">
   <h1 class="text-red-500 font-bold py-2">Total Price : <?= number_format($invUser[0]['total_price'])?>đ</h1>

   <form action="<?= BASE_URL . 'cap-nhat-trang-thai' ?>" method="post">
   <input type="hidden" name="id" value="<?= $invUser[0]['id']?>">
   <select name="status" id="" class="border-solid border-2 border-gray-300 rounded py-2">
    <option value="6">Hủy đơn</option>
    </select>
    <button class="border-2 inline mt-3 mr-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2" name="btn">Confirm</button>
    </form>
   </div>

</div>