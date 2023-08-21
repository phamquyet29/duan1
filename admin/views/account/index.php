<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Customer Account</h3>
            <form action="" method="get">
			<div class="form-input">
				<input name="keyword" value="<?= $keyword ?> "type="search" class="outline-none p-1 rounded bg-[#eeeeee] border-2" placeholder="Search...">
				<button type="submit" class="search-btn"><i class=" bg-[#3c91e6] text-white
                text-[20px] p-[6px] rounded bx bx-search"></i></button>
			</div>
		</form>
        <a href="<?= ADMIN_URL . 'khach-hang/them-account'?>"><i class='text-[20px] bx bx-add-to-queue'></i></a>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="pl-2">ID</th>
                    <th>Account</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($account as $ac) : ?>
                    <tr>
                        <td class="pl-2"><?= $ac['id'] ?></td>
                        <td><?= $ac['user'] ?></td>
                        <td><?= $ac['pass'] ?></td>
                        <td><?= $ac['email'] ?></td>
                        <td class="short"><?= $ac['address'] ?></td>
                        <td><?= $ac['tel']  ?></td>
                        <td><?php echo $ac['role'] == 1 ? 'Admin' : 'User' ?></td>
                        <td>
                            <a href="javascript:;" onclick="confirmRemove('<?= ADMIN_URL . 'khach-hang/xoa?id=' . $ac['id'] ?>', '<?= $ac['user'] ?>')"><button class="m-2 border-2 border-red-500 rounded bg-red-500"><i class='text-[20px] p-2 bx bx-trash '></i></button></a>
                            <a href="<?= ADMIN_URL . 'khach-hang/get-account?id=' . $ac['id'] ?>"><button class="border-2 border-green-500 rounded bg-green-500 "><i class='text-[20px] p-2 bx bxs-edit'></i></button></a>
                        </td>
                    </tr>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>