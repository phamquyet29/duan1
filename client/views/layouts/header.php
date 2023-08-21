<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= USER_ASSET ?>/css/style.css">
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="progress"></div>


  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <form method="get" class="header-search">
        <input type="search" name="keyword" placeholder="Search Product..." class="input-field">

        <button class="search-btn" aria-label="Search">
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </form>

      <a href="<?= BASE_URL ?>" class="logo">
        <img src="<?= USER_ASSET ?>/images/logo.svg" alt="Casmart logo" width="130" height="31">
      </a>

      <div class="header-actions">
        <div class="sigin">
          <?php
          if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
          ?>
            <div class="flex">
              <ion-icon class="text-base px-1 pt-1  border-none rounded-md" name="person-outline" aria-hidden="true"></ion-icon><a class="text-base pr-1 border-none rounded-md hover:text-cyan-700" href="<?= BASE_URL . 'form-edit-taikhoan' ?>"><?= $user ?></a>
              <?php
              if ($role == 1) {
              ?>
                <li class="text-base border-none rounded-md mx-3 px-1 hover hover:text-cyan-600"><a href="<?= BASE_URL . 'web-management' ?>">Login Admin</a></li>
              <?php } ?>
              <li>
                <a class="inline px-3 py-1 ml-2 border-black border  bg-white text-black rounded hover:bg-black hover:text-white" href="<?= BASE_URL . 'thoat' ?>">Logout</a>
              </li>
              
              <button class="header-action-btn">
              <a href="<?= BASE_URL . 'product-in-cart'?>">
              <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                <p class="header-action-label">Cart</p>
              </a>
                <div class="btn-badge green" aria-hidden="true"><?= countCartNumber() ?></div>
              </button>

              <button class="header-action-btn">
                <a href="<?= BASE_URL . 'san-pham-da-yeu-thich' ?>"><ion-icon name="heart-outline" aria-hidden="true"></ion-icon></a>
                <p class="header-action-label">Wishlisht</p>
                <div class="btn-badge" aria-hidden="true"><?= count(getFvrProduct()) ?></div>
              </button>

              <a class="pl-3" href="<?= BASE_URL . 'tim-kiem-don-hang'?>">
                <button class="header-action-btn">
                <ion-icon name="archive-outline"></ion-icon>
                  <p class="header-action-label">Purchased</p>
                </button>
              </a>
              <li>
            </div>
          <?php
          } else { ?>
            <div class="flex">
            <button class="header-action-btn">
              <a href="<?= BASE_URL . 'product-in-cart'?>">
              <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                <p class="header-action-label">Cart</p>
              </a>
                <div class="btn-badge green" aria-hidden="true"><?= countCartNumber() ?></div>
              </button>

              <a href="<?= BASE_URL . 'form-dangnhap' ?>">
                <button class="header-action-btn">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                  <p class="header-action-label">Sign in</p>
                </button>
              </a>

              <a href="<?= BASE_URL . 'tim-kiem-don-hang'?>">
                <button class="header-action-btn">
                <ion-icon name="archive-outline"></ion-icon>
                  <p class="header-action-label">Purchased</p>
                </button>
              </a>
            </div>
        </div>
      <?php } ?>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="<?= USER_ASSET ?>/images/logo.svg" alt="Casmart logo" width="130" height="31">
          </a>

          <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="<?= BASE_URL ?>" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="<?= BASE_URL . 'san-pham' ?>" class="navbar-link">Shop</a>
          </li>

          <li>
            <a href="<?= BASE_URL . 'about' ?>" class="navbar-link">About</a>
          </li>

          <li>
            <a href="<?= BASE_URL . 'blog' ?>" class="navbar-link">Blog</a>
          </li>

          <li>
            <a href="<?= BASE_URL . 'contact' ?>" class="navbar-link">Contact</a>
          </li>

        </ul>

      </nav>

      </div>
  </header>