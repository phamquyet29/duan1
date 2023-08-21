<div class="table-data">
    <div class="order">
        <div class="head">
            <h3>List Image</h3>
            <form action="" method="get">
                <div class="form-input">
                    <input name="keyword" value="<?= $keyword ?> " type="search" class="outline-none p-1 rounded bg-[#eeeeee] border-2" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class=" bg-[#3c91e6] text-white
                text-[20px] p-[6px] rounded bx bx-search"></i></button>
                </div>
            </form>
            <a href="<?= ADMIN_URL . 'banner/them-banner' ?>"><i class='text-[20px] bx bx-add-to-queue'></i></a>
        </div>
        <div class="p-2">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>#</td>
                        <td>Image</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listbanner as $key => $item) : ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td>
                                <img src=" <?= 'public/upload/banner/' . $item->image ?>" alt="" style="width: 100px;">
                            </td>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
