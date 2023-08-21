<div class="row mb xl:container mx-auto">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle text-center font-bold text-lg mt-2">Sign Up</div>
            <div class="row boxcontent formtaikhoan">
                <form action="<?= BASE_URL . 'dangky' ?>" method="post" class="w-3/6 m-auto" id="form-dang-ky">
                    <div class="form-group mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Your
                            Email</label>
                        <input id="email" type="text" name="email" class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="VD: name@gmail.com">
                        <?php echo isset($errors['email']) ? '<p style="color:red;">' . $errors['email'] . '</p>' : ''; ?>
                    </div>
                    <div class="form-group mb-6">
                        <label for="tendangnhap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">User Name</label>
                        <input id="user" type="text" name="user" class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="VD: Nguyễn Văn A">
                        <?php echo isset($errors['user']) ? '<p style="color:red;">' . $errors['user'] . '</p>' : ''; ?>
                    </div>
                    <div class="form-group mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Password</label>
                        <input id="password" type="password" name="pass" class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Nhập mật khẩu">
                        <?php echo isset($errors['pass']) ? '<p style="color:red;">' . $errors['pass']  . '</p>' : ''; ?>
                    </div>
                    <div class="form-group mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Comfirm
                            Password</label>
                        <input id="Comfirm-password" type="password" name="pass-comfirm" class="form-control shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Nhập lại mật khẩu">
                        <?php echo isset($errors['pass-comfirm']) ? '<p style="color:red;">' . $errors['pass-comfirm'] . '</p>' : ''; ?>
                    </div>
                    <input class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" value="Register" name="dangky">
                    <input class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="reset" value="Reset">
                </form>
                <h2 class="thongbaoloi">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }
                    ?>
                </h2>
            </div>
        </div>

    </div>

</div>