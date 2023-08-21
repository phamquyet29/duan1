<section class="hero" id="home" style="background-image: url('<?= USER_ASSET ?>/images/hero-banner.jpg')">
<img src="" alt="">  
<div class="container max-w-7xl">

    <div class="hero-content">

      <p class="hero-subtitle">Fashion Everyday</p>

      <h2 class="h1 hero-title">Unrivalled Fashion House</h2>

      <button class="btn btn-primary">Shop Now</button>

    </div>

  </div>
</section>

<section class="service">

  <div class="container">

    <ul class="service-list">

      <li class="service-item">
        <div class="service-item-icon">
          <img src="<?= USER_ASSET ?>/images/service-icon-1.svg" alt="Service icon">
        </div>

        <div class="service-content">
          <p class="service-item-title">Free Shipping</p>

          <p class="service-item-text">On All Order Over $599</p>
        </div>
      </li>

      <li class="service-item">
        <div class="service-item-icon">
          <img src="<?= USER_ASSET ?>/images/service-icon-2.svg" alt="Service icon">
        </div>

        <div class="service-content">
          <p class="service-item-title">Easy Returns</p>

          <p class="service-item-text">30 Day Returns Policy</p>
        </div>
      </li>

      <li class="service-item">
        <div class="service-item-icon">
          <img src="<?= USER_ASSET ?>/images/service-icon-3.svg" alt="Service icon">
        </div>

        <div class="service-content">
          <p class="service-item-title">Secure Payment</p>

          <p class="service-item-text">100% Secure Gaurantee</p>
        </div>
      </li>

      <li class="service-item">
        <div class="service-item-icon">
          <img src="<?= USER_ASSET ?>/images/service-icon-4.svg" alt="Service icon">
        </div>

        <div class="service-content">
          <p class="service-item-title">Special Support</p>

          <p class="service-item-text">24/7 Dedicated Support</p>
        </div>
      </li>

    </ul>

  </div>
</section>

<section class="section category max-w-6xl mx-auto">
  <div class="container">

    <ul class="category-list">

      <li class="category-item">
        <figure class="category-banner">
          <img src="<?= USER_ASSET ?>/images/category-1.jpg" alt="Sunglass & eye" loading="lazy" width="510" height="600" class="w-100">
        </figure>

        <a href="#" class="btn btn-secondary">Sunglass & Eye</a>
      </li>

      <li class="category-item">
        <figure class="category-banner">
          <img src="<?= USER_ASSET ?>/images/category-2.jpg" alt="Active & outdoor" loading="lazy" width="510" height="600" class="w-100">
        </figure>

        <a href="#" class="btn btn-secondary">Active & Outdoor</a>
      </li>

      <li class="category-item">
        <figure class="category-banner">
          <img src="<?= USER_ASSET ?>/images/category-3.jpg" alt="Winter wear" loading="lazy" width="510" height="600" class="w-100">
        </figure>

        <a href="#" class="btn btn-secondary">Winter Wear</a>
      </li>

      <li class="category-item">
        <figure class="category-banner">
          <img src="<?= USER_ASSET ?>/images/category-4.jpg" alt="Exclusive footwear" loading="lazy" width="510" height="600" class="w-100">
        </figure>

        <a href="#" class="btn btn-secondary">Exclusive Footwear</a>
      </li>

      <li class="category-item">
        <figure class="category-banner">
          <img src="<?= USER_ASSET ?>/images/category-5.jpg" alt="Jewelry" loading="lazy" width="510" height="600" class="w-100">
        </figure>

        <a href="#" class="btn btn-secondary">Jewelry</a>
      </li>

      <li class="category-item">
        <figure class="category-banner">
          <img src="<?= USER_ASSET ?>/images/category-6.jpg" alt="Sports cap" loading="lazy" width="510" height="600" class="w-100">
        </figure>

        <a href="#" class="btn btn-secondary">Sports Cap</a>
      </li>

    </ul>

  </div>
</section>


<section class="section product max-w-7xl mx-auto">
  <div class="container">

    <h2 class="h2 section-title">Products of the week</h2>

    <ul class="filter-list">

      <li>
        <button class="filter-btn  active">Most Views</button>
      </li>

      <li>
        <button class="filter-btn">Hot Collection</button>
      </li>

      <li>
        <button class="filter-btn">Trendy</button>
      </li>

      <li>
        <button class="filter-btn">New Arrival</button>
      </li>

    </ul>

    <ul class="product-list">
      <?php foreach ($products as $pro) : ?>
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
               <?php if($pro['status'] == 1) : ?>
                 <a class="card-action-btn cart-btn bg-gray-500 pointer-events-none" href="<?= BASE_URL . 'add-to-cart?id=' . $pro['id'] ?>">
                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>Out of stock
                </a>
              <?php else : ?>
                <a class="card-action-btn cart-btn" href="<?= BASE_URL . 'add-to-cart?id=' . $pro['id'] ?>">
                <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>Add to Cart
                </a>
              <?php endif?>
              
                <!-- =======Nút yêu thích======== -->

                <?php if (isset($_SESSION['user']) && $_SESSION['user'] != null) : ?>
                  <a class="card-action-btn" aria-label="Add to Whishlist" href="<?= BASE_URL . 'yeu-thich?id=' . $pro['id'] ?>">
                  <button>
                    <ion-icon name="heart-outline"></ion-icon>
                  </button>
                  </a>
                <?php else : ?>
                  <button class="card-action-btn pointer-events-none bg-gray-500 po" aria-label="Add to Whishlist">
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

    <a href="<?= BASE_URL . 'san-pham' ?>"><button class="btn btn-outline">View All Products</button></a>
  </div>
</section>

<section class="section newsletter">
  <div class="container">

    <div class="newsletter-card" style="background-image: url('<?= USER_ASSET ?>/images/newsletter-bg.png')">

      <h2 class="card-title">Subscribe Newsletter</h2>

      <p class="card-text">
        Enter your email below to be the first to know about new collections and product launches.
      </p>

      <form action="" class="card-form">

        <div class="input-wrapper">
          <ion-icon name="mail-outline"></ion-icon>

          <input type="email" name="emal" placeholder="Enter your email" required class="input-field">
        </div>

        <button type="submit" class="btn btn-primary w-100 bg-black hover:bg-white">
          <span>Subscribe</span>
          <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
        </button>

      </form>

    </div>

  </div>
</section>