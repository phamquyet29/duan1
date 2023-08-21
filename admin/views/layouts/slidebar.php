<section id="sidebar">
	<a href="#" class="brand">
		<i class='bx bxs-smile'></i>
		<span class="text">AdminHub</span>
	</a>
	<ul class="side-menu top">
		<li class="">
			<a href="<?= ADMIN_URL ?>">
				<i class='bx bxs-dashboard'></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="<?= ADMIN_URL . 'san-pham'?>">
				<i class='bx bxs-shopping-bag-alt'></i>
				<span class="text">Product</span>
			</a>
		</li>
		<li>
			<a href="<?= ADMIN_URL . "danh-muc"?>">
				<i class='bx bxs-doughnut-chart'></i>
				<span class="text">Category</span>
			</a>
		</li>
		<li>
			<a href="<?= ADMIN_URL . "binh-luan"?>">
				<i class='bx bxs-message-dots'></i>
				<span class="text">Comment</span>
			</a>
		</li>
		<li>
			<a href="<?= ADMIN_URL . "khach-hang"?>">
				<i class='bx bxs-group'></i>
				<span class="text">Account</span>
			</a>
		</li>
		<li>
			<a href="<?= ADMIN_URL  . 'lien-he'?>">
			<i class='bx bx-envelope'></i>
				<span class="text">Send mail</span>
			</a>
		</li>

		<li>
			<a href="<?= ADMIN_URL  . 'quan-ly-hoa-don'?>">
			<i class='bx bxs-credit-card-alt'></i>
				<span class="text">Order</span>
			</a>
		</li>
		<li>
			<a href="<?= ADMIN_URL  . 'banner'?>">
			<i class='bx bxs-image'></i>
				<span class="text">Banner</span>
			</a>
		</li>
	</ul>
	<ul class="side-menu">
		<li>
			<a href="#">
				<i class='bx bxs-cog'></i>
				<span class="text">Setting</span>
			</a>
		</li>
		<li>
			<a href="<?=  BASE_URL?>" class="logout">
				<i class='bx bxs-log-out-circle'></i>
				<span class="text">Logout</span>
			</a>
		</li>
	</ul>
</section>

<section id="content">
	<nav>
		<i class='bx bx-menu'></i>

		<form action="#">
			<div class="form-input">
				<input type="search" placeholder="Search...">
				<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
			</div>
		</form>
	</nav>