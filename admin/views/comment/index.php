
<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Comment</h3>
            <form action="" method="get">
			<div class="form-input">
				<input name="keyword" value="<?= $keyword ?> "type="search" class="outline-none p-1 rounded bg-[#eeeeee] border-2" placeholder="Search...">
				<button type="submit" class="search-btn"><i class=" bg-[#3c91e6] text-white
                text-[20px] p-[6px] rounded bx bx-search"></i></button>
			</div>
		</form>
        <a href="<?= ADMIN_URL . 'binh-luan'?>"><i class='text-[20px] bx bx-add-to-queue'></i></a>
        </div>
        <table>
            <thead>
                <tr>
                    <th class="pl-2">ID</th>
                    <th>Content</th>
                    <th>IDuser</th>
                    <th>IDpro</th>
                    <th>Comment date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listbl as $ac) : ?>
                    <tr>
                        <td class="pl-2"><?= $ac['id'] ?></td>
                        <td><?= $ac['noidung'] ?></td>
                        <td><?= $ac['iduser'] ?></td> 
                        <td><?= $ac['idpro'] ?></td>
                        <td><?= $ac['ngaybinhluan']  ?></td>
                        <td>
                            <a href="javascript:;" onclick="confirmRemove('<?= ADMIN_URL . 'binh-luan/xoa?id=' . $ac['id'] ?>', '<?= $ac['iduser'] ?>')"><button class="m-2 border-2 border-red-500 rounded bg-red-500"><i class='text-[20px] p-2 bx bx-trash '></i></button></a>
                            <a href="<?= ADMIN_URL . 'binh-luan/getbinhluan?id=' . $ac['id'] ?>"><button class="border-2 border-green-500 rounded bg-green-500 "><i class='text-[20px] p-2 bx bxs-edit'></i></button></a>
                        </td>
                    </tr>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>