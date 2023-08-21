<div class="main-detail px-7 py-10">
    <div class="item flex justify-center">
        <img class="w-[450px]" src="<?= PUBLIC_URL . $pro['image'] ?>" alt="">
        <div class="detail pl-5">

            <h1 class="font-bold text-[27px] my-5 text-black "><?= $pro['name'] ?></h1>

            <div class="my-5 flex">Category : <?php
             $id = $pro['id_category'];
             $categori = loadOneCateDetail($id);
            echo $categori['categoryName'];
            ?> | Tình trạng : <?php echo $pro['status'] == 1 ? ' <span class="text-red-500 ml-1">Hết hàng</span>' : ' <span class="ml-1">Còn hàng</span>' ?></div>

            <div class="price flex  my-5">
                <span class="text-black font-bold text-[25px]"><?= number_format($pro['price']) ?>đ</span>
                <span class="pl-3 pt-2 line-through"><?= number_format($pro['discount']) ?>đ</span>
            </div>

            <p class=" my-5">NEEDS OF WISDOM® / Streetwear / Based in Saigon / Made in Vietnam</p>
            <form action="">
                <div class="form-group">
                    <label class="inline text-black font-bold text-[25px]" for="exampleInputFile">Size</label>
                    <select class=" ml-5 w-24 border-2 inline rounded outline-none" name="size">
                        <?php $size = size() ?>
                        <?php foreach ($size as $sz) : ?>
                            <option class="text-center"> <?= $sz['size'] ?> </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mt-7">
                <?php if($pro['status'] == 1) : ?>
                  <button class="inline pointer-events-none border-gray-500 bg-gray-500 text-white border-[1px] px-2 py-3 text-[17px] rounded-md  hover:bg-white hover:text-black border-solid" type="submit"><i class="bx bx-cart-alt"></i>Add to cart</button>
                <?php else : ?>
                  <a class="inline border-black bg-black text-white border-[1px] px-2 py-3 text-[17px] rounded-md my-5 hover:bg-white hover:text-black border-solid" href="<?= BASE_URL . 'add-to-cart?id=' . $pro['id'] ?>"><i class="bx bx-cart-alt"></i> Add to cart</a>
              <?php endif?>
              </div>
             
               
            </form>
        </div>
    </div>
</div>
<span class="bg-red-600 px-5 py-2 inline text-white font-semibold">Description</span>
<div class="desc border-[1px] border-solid px-3 py-5 my-4">
    <p class="text-center min-h-full"><?= $pro['desc'] ?></p>
</div>
<!-- from binh luan -->
<section style="background-color: #eee;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <div class="card">
          <div class="card-body">
            <div class="d-flex flex-start align-items-center">

                <?php $listbl = getallcomment()?>
                <?php foreach ($listbl as $ac) : ?>

                  
              <div>
                <p><?= $ac['noidung'] ?></p>
                <h6><?= $ac['iduser'] ?></h6>
                <h6><?= $ac['idpro'] ?></h6>
                <p><?= $ac['ngaybinhluan'] ?></p>
              </div>
              <?php endforeach ?>
          </div>
          <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
            <div class="d-flex flex-start w-100">
              <div class="form-outline w-100">
                <textarea  id="textAreaExample" rows="3"
                  style="background: #fff;"></textarea>
                <label class="form-label" for="textAreaExample"name="noidung">Message</label>
              </div>
            </div>
            <div class="float-end mt-2 pt-1">
            <input class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="submit" value="Comment" name="binhluan">
            <input class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="reset" value="Cancel">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- sản phẩm cùng danh mục -->
<?php if(empty($listgeneral)):?>
   <span></span>
    <?php else : ?>
        <h1 class="font-bold text-black text-[25px] py- px-6">Same Category</h1>
    <?php endif?>
<div class="">
<ul class="grid grid-cols-5 gap-7 mx-auto py-5 px-6">
    <?php foreach ($listgeneral as $pro) : ?>
      <li>
        <div class="product-card">
          <figure class="card-banner">
            <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>">
              <img src="<?= PUBLIC_URL . $pro['image'] ?>" alt="Casmart Smart Glass" loading="lazy" width="800" height="1034" class="w-100">
            </a>
            <div class="card-actions">
              <!-- =======Nút xem chi tiết======== -->
              <button class="card-action-btn" aria-label="Quick view">
                <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>">
                  <ion-icon name="eye-outline"></ion-icon>
                </a>
              </button>
              <!-- =======Nút giỏ hàng======== -->
              <?php if (isset($_SESSION['user']) && $_SESSION['user'] != null) : ?>
                <a class="card-action-btn cart-btn" href="<?= BASE_URL . 'add-to-cart?id=' . $pro['id'] ?>">
                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>Add to Cart
                </a>
              <?php else : ?>
                <button class="card-action-btn cart-btn">
                  <a href="<?= BASE_URL . 'form-dangnhap' ?>">Please login</a>
                </button>
              <?php endif ?>
              <!-- =======Nút yêu thích======== -->
              <?php if (isset($_SESSION['user']) && $_SESSION['user'] != null) : ?>
                <button class="card-action-btn" aria-label="Add to Whishlist">
                  <a href="<?= BASE_URL . 'yeu-thich?id=' . $pro['id'] ?>"><ion-icon name="heart-outline"></ion-icon></a>
                </button>
              <?php else : ?>
                <button class="card-action-btn pointer-events-none bg-gray-500" aria-label="Add to Whishlist">
                  <a href="<?= BASE_URL . 'yeu-thich?id=' . $pro['id'] ?>"><ion-icon name="heart-outline"></ion-icon></a>
                </button>
              <?php endif ?>

            </div>
          </figure>
          <div class="card-content">
            <h3 class="h4 card-title short">
              <a href="<?= BASE_URL . 'chi-tiet-san-pham?id=' . $pro['id'] ?>"><?= $pro['name'] ?></a>
            </h3>
            <div class="card-price">
              <data value="25.00"><?= number_format($pro['price']) ?>đ</data>
              <data value="39.00"><?= number_format($pro['discount']) ?>đ</data>
            </div>
          </div>
        </div>
      </li>
    <?php endforeach ?>
  </ul>
</div>


