<form class="bg-white rounded max-h-[570px]" action="<?= ADMIN_URL . 'khach-hang/luu-them-account'?>" method="post" class="form-horizontal">
    <div class="">
        <label class="text-[30px] flex justify-center py-3 font-bold text-[#666565]" for="">Add new Account </label>
    <div class="">
    <input type="text"  class="my-3 block bg-[#e5e5e5] , w-[1175px] mx-5 p-3 rounded outline-none" name="user" require class="form-control block" id="inputEmail3" placeholder="User Name">
    <input type="text"  class="my-3 bg-[#e5e5e5] block , w-[1175px] mx-5 p-3 rounded outline-none" name="pass" require class="form-control block" id="inputEmail3" placeholder="Password">
    <input type="text"  class="my-3 bg-[#e5e5e5] block , w-[1175px] mx-5 p-3 rounded outline-none" name="email" require class="form-control block" id="inputEmail3" placeholder="Email">
    <input type="text"  class="my-3 bg-[#e5e5e5] block , w-[1175px] mx-5 p-3 rounded outline-none" name="address" require class="form-control block" id="inputEmail3" placeholder="address">
    <input type="text"  class="my-3 bg-[#e5e5e5] , w-[1175px] mx-5 p-3 rounded outline-none" name="tel" require class="form-control" id="inputEmail3" placeholder="Phone">
    <select name="role" class=" mb-2 border-2 rounded block , w-[1175px] mx-5 p-3 " id="">
         <option value="0">User</option>
         <option value="1">Admin</option>
    </select>

    </div>
    <div class="card-footer">
    <button type="submit" class="border-2 mx-5 my-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2">Add</button></a>
    <a class="border-2 mt-3 text-[17px] border-gray-400 rounded bg-gray-400 text-white px-3 py-2" href="<?= ADMIN_URL . 'khach-hang'?>">Cancel</a>
  </div>
    </div>

</form>

