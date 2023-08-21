
<div class="min-h-screen p-7 leading-loose mx-auto max-w-full">
  <form method="post" action="<?= BASE_URL . 'pay-cart'?>" class="max-w-7xl p-4 mx-auto bg-white rounded shadow-xl">
    <p class="text-gray-800 text-[20px] font-bold ">Billing Information</p>
    <div class="py-4">
      <label class="block mb-1 text-sm text-gray-600" for="cus_name">Name</label>
      <input class="w-full px-2 py-2 border-gray-500 border-[1px] border-solid text-gray-700 bg-gray-100 rounded" id="cus_name" name="name" type="text" required placeholder="Your Name" aria-label="Name">
    </div>
    <div class="py-4">
      <label class="block text-sm mb-1 text-gray-600" for="cus_email">Email</label>
      <input class="w-full px-2 py-2 border-gray-500 border-[1px] border-solid text-gray-700 bg-gray-100 rounded" id="cus_email" name="email" type="text" required placeholder="Your Email" aria-label="Email">
    </div>
    <div class="py-4">
      <label class=" block text-sm mb-1 text-gray-600" for="cus_email">Address</label>
      <input class="w-full px-2 py-2 border-gray-500 border-[1px] border-solid  text-gray-700 bg-gray-100 rounded" id="cus_email" name="address" type="text" required placeholder="Street" aria-label="Email">
    </div>
      <label class="block text-sm mb-1 text-gray-600" for="cus_name">Phone</label>
      <input class="w-full px-2 py-2 border-gray-500 border-[1px] border-solid text-gray-700 bg-gray-100 rounded" id="cus_name" name="phone" type="number" required  placeholder="Your phone">

      <label class="block text-sm mb-1 text-gray-600" for="cus_name">Note</label>
     <textarea class="w-full px-2 py-2 border-gray-500 border-[1px] border-solid text-gray-700 bg-gray-100 rounded forcus:border-" name="note" id="" cols="30" rows="5"></textarea>
      <button type="submit" class="px-7 py-1 mt-5 text-white rounded bg-blue-500">Buy</button>
    </div>
  </form>
</div>

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">