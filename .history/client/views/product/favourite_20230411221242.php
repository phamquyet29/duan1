  <div class="p-5 h-screen bg-gray-100 rounded">
    <h1 class="text-xl mb-2">Product liked</h1>

    <div class=" rounded-lg shadow md:block">
      <table class="w-full">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
        <tr>
          <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">STT</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-left">Name</th>
          <th class="p-3 text-sm font-semibold tracking-wide text-left">IMAGE</th>
          <th class="w-24 p-3 text-sm font-semibold tracking-wide text-left">Status</th>
          <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Price</th>
          <th class="w-32 p-3 text-sm font-semibold tracking-wide text-left">Action</th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
        <?php foreach($listFvr as $index => $item):?>
        <tr class="bg-white">

          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
           <p class="font-bold text-blue-500 hover:underline"><?= $index + 1?></p>
          </td>

          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
            <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $item['product_id']?>"><?= $item['name']?></a>
          </td>

          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
            <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $item['product_id']?>"><img class="w-16 h-16" src="<?= PUBLIC_URL . $item['image']?>" alt=""></a>
          </td>

          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
          <?php echo $item['status'] == 1 ? '<span class="p-1.5 text-xs font-medium uppercase tracking-wider text-orange-700 bg-orange-200 rounded-lg bg-opacity-50"><i class="bx bxs-lock-alt"></i> Out of stock</span>' : '<span class="p-1.5 text-xs font-medium uppercase tracking-wider text-green-800 bg-green-200 rounded-lg bg-opacity-50"><i class="bx bxs-circle"></i> Stocking</span>' ?>
          
          </td>

          <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
            <?= number_format($item['price'])?>đ
        </td>
          <td class="flex items-end">
          <a href="<?= BASE_URL . 'xoa-san-pham-yeu-thich?id=' . $item['id'] ?>"><i class='bg-red-200 p-[2px] text-red-800 text-[31px] rounded mt-7 bx bx-x-circle'></i></a>
          <?php if($item['status'] == 1) : ?>
          <a href=""><i class=' ml-2 pointer-events-none text-white bg-gray-500 p-[2px] hover:text-black hover:bg-white border-gray-500 border-solid border-[1px] text-[30px] rounded mt-7 bx bx-cart'></i></a>
          <?php else : ?>
            <a href="<?= BASE_URL . 'add-to-cart?id=' . $item['product_id'] ?>"><i class=' ml-2 text-white bg-black p-[2px] hover:text-black hover:bg-white border-black border-solid border-[1px] text-[30px] rounded mt-7 bx bx-cart'></i></a>
          <?php endif?>
          </td>
        </tr>
        <?php endforeach?>
        </tbody>
      </table>
    </div>

</div>