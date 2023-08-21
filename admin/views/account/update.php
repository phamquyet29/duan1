<?php extract($ac) ?>
<form class="bg-white rounded max-h-[540px]" action="<?= ADMIN_URL . 'khach-hang/cap-nhat-account'?>" method="post" class="form-horizontal">
    <div class="">
<label class="text-[30px] flex justify-center py-3 font-bold text-[#666565]" for="">Update account</label>
    <div class="">
      <input type="hidden" name="id" value="<?= $ac['id']?>">
    <input type="text" value="<?= $ac['user']?>" class="my-3 block bg-[#e5e5e5] w-[1175px] mx-5 p-3 rounded outline-none" name="user" require class="form-control block" id="inputEmail3" placeholder="User Name">
    <input type="text" value="<?= $ac['pass']?>"  class="my-3 bg-[#e5e5e5] block w-[1175px] mx-5 p-3 rounded outline-none" name="pass" require class="form-control block" id="inputEmail3" placeholder="Password">
    <input type="text" value="<?= $ac['email']?>" class="my-3 bg-[#e5e5e5] block w-[1175px] mx-5 p-3 rounded outline-none" name="email" require class="form-control block" id="inputEmail3" placeholder="Email">
    <input type="text" value="<?= $ac['address']?>" class="my-3 bg-[#e5e5e5] block w-[1175px] mx-5 p-3 rounded outline-none" name="address" require class="form-control block" id="inputEmail3" placeholder="address">
    <input type="text" value="<?= $ac['tel']?>" class="my-3 bg-[#e5e5e5] w-[1175px] mx-5 p-3 rounded outline-none" name="tel" require class="form-control" id="inputEmail3" placeholder="Phone">
    <select name="role" class=" mb-2 border-2 rounded block w-[1175px] mx-5 p-3 ">
                <option value="1" <?php if (1 == $ac['role']) {
                                        echo "selected";
                                    } ?>>Admin</option>
                <option value="0" <?php if (0 == $ac['role']) {
                                        echo "selected";
                                    } ?>>User</option>
            </select>

    </div>
    <div class="card-footer">
    <button type="submit" class="border-2 mx-5 my-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2">Add</button></a>
    <a class="border-2 mt-3 text-[17px] border-gray-400 rounded bg-gray-400 text-white px-3 py-2" href="<?= ADMIN_URL . 'khach-hang'?>">Cancel</a>
  </div>
    </div>

</form>