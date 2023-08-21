<div class="row mb xl:container mx-auto py-5">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle text-center font-bold text-xl mt-2 pointer-events-none">Account</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <div class="row mb10 hidden">
                        Xin chào !<br />
                        <?= $user ?>
                    </div>
                    <div class="row mb10 hidden">
                        <li><a href="<?= BASE_URL . 'form-quenmk' ?>">Forgot Password</a></li>
                        <li><a href="<?= BASE_URL . 'edit-taikhoan' ?>">Update Account</a></li>
                        <?php
                        if ($role == 1) {
                        ?>
                            <li><a href="#">Xin chào quản trị viên</a></li>
                        <?php } ?>
                        <!-- <li><a href="<?= BASE_URL . 'thoat' ?>">Thoát</a></li> -->
                    </div>
                <?php
                } else {
                ?>
                    <form action="<?= BASE_URL . 'dangnhap' ?>" method="post" class="w-3/6 m-auto form">

                        <div class="form-group mb-6">
                            <label for="tendangnhap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Name login</label>
                            <input id="user" type="text" name="user" class="form-control shadow-sm bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Nhập User Name">
                            <?php echo isset($errors['user']) ? '<p style="color:red;">' . $errors['user'] . '</p>' : ''; ?>
                        </div>

                        <div class="form-group mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Passowrd</label>
                            <input id="password" type="password" name="pass" class="form-control shadow-sm bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Nhập Password">
                            <?php echo isset($errors['pass']) ? '<p style="color:red;">' . $errors['pass']  . '</p>' : ''; ?>
                        </div>

                        <button class="w-full text-white text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" value="Login" name="dangnhap">Login</button>

                        <a class="w-full text-white text-center block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="<?= BASE_URL . 'form-dangky' ?>">Register</a>
                        <li class="hover:text-blue-700 hover:underline w-1/6"><a href="<?= BASE_URL . 'form-quenmk' ?>">Quên mật khẩu</a></li>
                        <!-- <li><a href="<?= BASE_URL . 'dangky' ?>">Đăng ký thành viên</a></li> -->
                    </form>
                <?php } ?>
            </div>
        </div>

    </div>
</div>