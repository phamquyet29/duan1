<form class="flex justify-center items-center bg-white w-[600] rounded h-[570px]" action="<?= ADMIN_URL . 'danh-muc/luu-them-danh-muc'?>" method="post" class="form-horizontal">
    <div class="">
        <label class="text-[30px] font-bold text-[#666565]" for="">Add new category <i class='mt-1 bx bxs-category' ></i></label>
    <div class="">
    <input type="text"  class="my-2 bg-[#e5e5e5] w-[500px] p-3 rounded outline-none" name="name" require class="form-control" id="inputEmail3" placeholder="category">
    </div>
    <div class="card-footer">
    <button type="submit" class="border-2 mt-3 mr-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2">Add</button></a>
    <a class="border-2 mt-3 text-[17px] border-gray-400 rounded bg-gray-400 text-white px-3 py-2" href="<?= ADMIN_URL . 'danh-muc'?>">Cancel</a>
  </div>
    </div>

</form>