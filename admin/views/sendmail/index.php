<div class="">
   
    <form action="<?= ADMIN_URL . 'gui-mail' ?>" class="flex flex-row p-4 bg-white w-full rounded min-h-[570px]" role="form" method="post" enctype="multipart/form-data">
    <div class="">
        </div>
        <div class="card-body w-full">
            <h3  class="text-[30px] text-center font-bold text-[#666565]">Send Mail</h3>
            <input type="hidden" name="id">
            <div class="form-group w-full">
                <label class="inline mb-2" for="exampleInputEmail1">Người nhận</label>
                <input class="block my-2 bg-[#e5e5e5] w-full  p-3 rounded outline-none" required  name="reccevier" type="email" class="form-control" id="exampleInputEmail1" placeholder="name">
            </div>

            <div class="form-group">
                <label class="inline mb-2" for="">Tiêu đề</label>
                <input class="my-2 block bg-[#e5e5e5] w-full p-3 rounded outline-none" name="title" type="" class="form-control" id="exampleInputPassword1" placeholder="Title">
            </div>
            <label for="exampleInputEmail1">Desc</label>
            <div class="form-group">
                <textarea name="content" id="editor" cols="50" rows="50"></textarea>
            </div>
            <div class="card-footer">
                <button type="submit" class="border-2 mt-3 mr-3 text-[17px] border-[#3c91e6] rounded bg-[#3c91e6] text-white px-3 py-2">Submit</button>
            </div>
    </form>
</div>