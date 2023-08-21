<div class="">
   <?php extract($pro)?>
    <form action="<?= ADMIN_URL . 'san-pham/luu-cap-nhat-san-pham' ?>" class="flex flex-row p-4 bg-white w-full rounded min-h-[570px]" role="form" method="post" enctype="multipart/form-data">
    <div class="">
        </div>
        <div class="card-body w-full">
            <h3  class="text-[30px] text-center font-bold text-[#666565]">Add product <i class='bx bxs-shopping-bag-alt'></i></h3>
            <input type="hidden" value="<?= $pro['id']?>" name="id">
            <div class="form-group w-full">
                <label class="inline mb-2"  for="exampleInputEmail1">Name product</label>
                <input class="block my-2 bg-[#e5e5e5] w-full  p-3 rounded outline-none"  value="<?= $pro['name'] ?>"  name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="name">
            </div>
            <div class="form-group">
                <label class="inline mb-2" for="">Price</label>
                <input  value="<?= $pro['price'] ?>" class="my-2 block bg-[#e5e5e5] w-full p-3 rounded outline-none" name="price" type="" class="form-control" id="exampleInputPassword1" placeholder="Price">
            </div>

            <div class="form-group">
                <label class="inline mb-2" for="">Discount</label>
                <input class="my-2 block bg-[#e5e5e5] w-full p-3 rounded outline-none" name="discount" type="" value="<?=$pro['discount']?>" class="form-control" id="exampleInputPassword1" placeholder="discound">
            </div>
            
            <div class="form-group">
                <label class="inline mb-2" for="exampleInputFile">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input class="block" value="<?=PUBLIC_URL.$pro['image'] ?>" name="image" type="file" accept="image/*" onchange="loadFile(event)">
                        <img class="border-white pt-2" style="width: 70px; height:70px;" id="output" />
                    </div>
                </div>
            </div>
            <label for="exampleInputEmail1">Desc</label>
            <div class="form-group">
                <textarea name="desc" id="editor" cols="50" rows="50"><?= $pro['desc']?></textarea>
            </div>
            
            <div class="form-group">
                <label class="inline mb-2" for="">View</label>
                <input value="<?=$pro['view']?>" class="my-2 block bg-[#e5e5e5] w-full p-3 rounded outline-none" name="view" type="" class="form-control" id="exampleInputPassword1" placeholder="number view">
            </div>

           

            <div class="form-group">
                <label class="inline mb-2" for="exampleInputFile">Category</label>
                <?php $category = loadAllCate()?>
                <select class=" mb-2 border-2 rounded block w-full" name="cateid">
                    <?php foreach ($category as $cate):?>
                        <option value="<?php echo $cate['id'] ?>" <?php if ($cate['id'] == $pro['id_category']) {
                        echo "selected";
                    } ?>><?php echo $cate['categoryName'] ?></option>
                        <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
            <label for="">Tình trạng</label>
            <select name="status" class=" mb-2 border-2 rounded block w-full">
                <option value="1" <?php if (1 == $pro['status']) {
                                        echo "selected";
                                    } ?>>Hết hàng</option>
                <option value="0" <?php if (0 == $pro['status']) {
                                        echo "selected";
                                    } ?>>Còn hàng</option>
            </select>
            </div>
            <div class="card-footer">
                <button type="submit" name="btn" class="border-2 mt-3 mr-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2">Update</button>
            </div>
    </form>
</div>
<script>
    let loadFile = function(event) {
        let reader = new FileReader();
        reader.onload = function() {
            let output = document.getElementById('output');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>