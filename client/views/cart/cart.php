<h1 class="text-center pt-5 text-[25px] font-bold">Product add to cart</h1>
<div class="mx-auto max-w-full ">
<div class="my-12 mx-10 bg-white rounded shadow-xl p-10 min-h-[520px]">
    <table>
        <thead class="border-b-[1px] border-solid border-black">
            <th class="w-[30%] short">Product</th>
            <th class="w-[5%] pr-10">Quantity</th>
            <th class="w-[5%] ">Category</th>
            <th class="w-[20%]">Price</th>
        </thead>

        <tbody >
            <?php $totalPrice = 0 ?>
            <?php foreach ($cart as $item) :?>
            <tr class="text-center border-b-[1px] border-solid border-black">
                <td class="w-[50%] py-4">
                    <img class="w-24 h-24 inline" src="<?= PUBLIC_URL . $item['image']?>" alt="">
                    <p class="inline ml-2 text-black"><?= $item['name']?></p>
                </td>
            <td class="w-[5%]"><?= $item['quantity']?></td>
            <td class="w-[5%]">
            <?php
              $id = $item['id_category'];
              $categori = loadOneCate($id);
               echo $categori['categoryName'];
             ?>
            </td>
            <td class="w-[20%]"><?= number_format($item['price'] * $item['quantity'] ) ?>đ</td>
            <?php $totalPrice += $item['price'] * $item['quantity'] ?>
                <?php endforeach?>
            </tr>
        </tbody>
    </table>
 
    <div class="flex justify-between pt-3 mx-10">
    <a class="px-7 py-1 text-white rounded bg-gray-500" href="<?= BASE_URL . 'xoa-san-pham'?>">Delete</a> 
    <span class="font-bold text-red-500">Total : <?= number_format($totalPrice)?>đ</span>
    <a class="px-7 py-1 text-white rounded bg-blue-500" href="<?= BASE_URL . 'form-pay-cart'?>">Pay</a> 
    </div>
 
</div>

<!-- <div class=" mt-8">
    <h1>Form Pay</h1>
    <form action="<?= BASE_URL . 'pay-cart' ?>" method="post">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Email</label>
        <input type="email" name="email">
        <label for="">Phone</label>
        <input type="number" name="phone">
        <label for="">Address</label>
        <input type="text" name="address">
        <label for="">Note :</label>
        <textarea name="note" id="" cols="30" rows="10"></textarea>

        <button class="border-2 border-solid border-black p-3" type="submit">Pay</button>
    </form>
</div>  -->
