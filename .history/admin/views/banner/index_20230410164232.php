
<form action="" method="post">
<div class="form-group">
                <label class="inline mb-2" for="exampleInputFile">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                    <input class="block" value="<?=PUBLIC_URL.$banner[0]['image'] ?>" name="banner" type="file" accept="image/*" onchange="loadFile(event)">
                        <img class="border-white pt-2" style="width: 70px; height:70px;" id="output" />
                    </div>
        </div>
</div>
</form>