<form action="<?= ADMIN_URL . 'update-banner'?>" method="post">
    <div class="form-group">
        <label class="inline mb-2" for="exampleInputFile">Image</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="" name="id" value="<?= $banner[0]['id']?>">
                <input class="block" name="new-image" type="file" accept="image/*" onchange="loadFile(event)">
                <img class="border-white pt-2" style="width: 70px; height:70px;" id="output" />
            </div>
        </div>
        <input class="hidden" value="<?= PUBLIC_URL . $banner[0]['image'] ?>" name="old-image" type="file" accept="image/*" onchange="loadFile(event)">
    </div>
    <button>Update</button>
</form>