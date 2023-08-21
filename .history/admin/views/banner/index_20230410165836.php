<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>Update banner</h3>
            <form action="" method="get">
                <div class="form-input">
                    <input name="keyword" type="search" class="outline-none p-1 rounded bg-[#eeeeee] border-2" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class=" bg-[#3c91e6] text-white
                text-[20px] p-[6px] rounded bx bx-search"></i></button>
                </div>
            </form>
            </div>
<table>
    <thead>
        <th class="">ID</th>
        <th class="">Banner</th>
        <th class="">Update</th>
    </thead>
    <tbody>
        <tr>
            <td><?= $banner[0]['id']?></td>
            <td><img src="<?= PUBLIC_URL . $banner[0]['image'] ?>"  alt=""></td>
            <td><a href="<?= ADMIN_URL . 'update-banner?id=' ?>">Update</a></td>
        </tr>
    </tbody>
</table>
</div>
</div>