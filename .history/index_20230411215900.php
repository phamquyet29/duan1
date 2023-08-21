<?php
session_start();
$url = isset($_GET['url']) ? rtrim($url = $_GET['url'], '/') : "/";
require_once "./commons/utils.php";
require_once "./dao/pdo.php";
require_once "./admin/business/category.php";
require_once "./client/business/category.php";
require_once "./client/business/size.php";
require_once "./client/business/comment.php";
//-----------mailer-------------
require_once './PHPMailer-master/src/PHPMailer.php';
require_once './PHPMailer-master/src/SMTP.php';
require_once './PHPMailer-master/src/Exception.php';

switch ($url) {
        // =========Trang chủ===========
    case "/":
        require_once "./client/business/home.php";
        home(10);
        break;

    case "san-pham":
        require_once "./client/business/product.php";
        Paging();
        break;

    case "chi-tiet-san-pham":
        require_once "./client/business/product.php";
        detailProduct();
        break;

    case "loc-san-pham":
        require_once "./client/business/product.php";
        filter();
        break;
    case "about":
        require_once "./client/business/about.php";
        about();
        break;
    case "contact":
        require_once "./client/business/contact.php";
        contact();
        break;
    case "yeu-thich":
        require_once "./client/business/home.php";
        favourite();
        break;

    case 'san-pham-da-yeu-thich':
        require_once './client/business/home.php';
        showProductFvr();
        break;
    
    case 'xoa-san-pham-yeu-thich':
        require_once './client/business/home.php';
        deleteFavorite();
        break;

    case 'form-dangky':
        require_once "./client/business/taikhoan.php";
        form_dangky();
        break;

    case 'dangky':
        require_once "./client/business/taikhoan.php";
        dangky();
        break;

    case 'dangnhap':
        require_once "./client/business/taikhoan.php";
        dangnhap();
        break;

    case 'form-dangnhap':
        require_once "./client/business/taikhoan.php";
        form_dangnhap();
        break;

    case 'edit-taikhoan':
        require_once "./client/business/taikhoan.php";
        edit_taikhoan();
        break;

    case 'form-edit-taikhoan':
        require_once "./client/business/taikhoan.php";
        form_edit_taikhoan();
        break;

    case 'quenmk':
        require_once "./client/business/taikhoan.php";
        quen_mk();
        break;

    case 'form-quenmk':
        require_once "./client/business/taikhoan.php";
        form_quenmk();
        break;
        
    case 'add-to-cart':
        require_once "./client/business/cart.php";
        add2Cart();
        break;
        
    case 'product-in-cart':
        require_once './client/business/cart.php';
        checkOut();
        break;
        
    case 'form-pay-cart': 
        require_once './client/business/cart.php';
        formCheckOut();
        break;

    case 'pay-cart':
        require_once "./client/business/cart.php";
        payCart();
        break;

    case "tim-kiem-don-hang":
        require_once "./client/business/cart.php";
        seachOder();
        break;
        
    case "san-pham-da-mua":
        require_once "./client/business/cart.php";
        ordered();
        break;

    case "xoa-san-pham":
        require_once "./client/business/cart.php";
        deleteProductInCart();
        break;

    case 'khong-tim-thay':
        require_once "./client/business/home.php";
        renderEmty();
        break;

    case 'chi-tiet-hoa-don':
        require_once "./client/business/cart.php";
        clientDetailOder();
        break;
    
    case "cap-nhat-trang-thai":
        require_once "./client/business/cart.php";
        updateClientStatus();
        break;
    
    case "dat-hang-thanh-cong":
        require_once "./client/business/cart.php";
        success();
        break;
        
    case 'thoat':
        session_unset();
        header('Location:' . BASE_URL);
        break;
        //========Trang chủ=============

        // =========admin==============
    case "web-management/lien-he":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/contactUser.php";
        mailForm();
        break;

        //Account
    case "web-management/khach-hang":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/account.php";
        indexAccount();
        break;

    case "web-management/khach-hang/cap-nhat-account":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/account.php";
        updateAccount();
        break;

    case "web-management/khach-hang/get-account":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/account.php";
        getAccount();
        break;

    case "web-management/khach-hang/xoa":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/account.php";
        DeleteAccount();
        break;

    case "web-management/gui-mail":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/contactUser.php";
        sendMail();
        break;

    case "web-management/binh-luan":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/comment.php";
        listcomment();
        break;

    case "web-management/binh-luan/xoa":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/comment.php";
        Deletebinhluan();
        break;

    case "web-management/binh-luan/update":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/comment.php";
        updatebinhluan();
        break;

    case "web-management/binh-luan/getbinhluan":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/comment.php";
        getbinhluan();
        break;
        
    case "web-management":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/dashboard.php";
        dashboardIndex();
        break;

    case "web-management/khach-hang/luu-them-account":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/account.php';
        addSaveAccount();
        break;

    case "web-management/khach-hang/them-account":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/account.php';
        addAccount();
        break;

        // danh muc
    case "web-management/danh-muc":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/category.php";
        cateIndex();
        break;

    case "web-management/danh-muc/xoa":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        cateDelete();
        break;

    case "web-management/danh-muc/them-danh-muc":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        addCate();
        break;

    case "web-management/danh-muc/get-danh-muc":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/category.php";
        getCate();
        break;

    case "web-management/danh-muc/luu-them-danh-muc":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        addSave();
        break;

    case "web-management/danh-muc/cap-nhat-danh-muc":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        updateCate();
        break;
        // ======= admin product ===========
    case "web-management/san-pham":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/product.php";
        proIndex();
        break;

    case "web-management/san-pham/xoa":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        proDelete();
        break;

    case "web-management/san-pham/them-san-pham":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        addPro();
        break;

    case "web-management/san-pham/luu-them-san-pham";
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        addSavePro();
        break;

    case "web-management/san-pham/get-san-pham":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/product.php";
        loadOneProduct();
        break;

    case "web-management/san-pham/luu-cap-nhat-san-pham";
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/product.php";
        updatePro();
        break;

    case "web-management/quan-ly-hoa-don":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/orders.php";
        orderIndex();
        break;

    case "web-management/chi-tiet-don-hang":
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/orders.php';
        detailOrder();
        break;
        
    case "web-management/cap-nhat-trang-thai":
        checkAuth([ADMIN_ROLE]);
        require_once "./admin/business/orders.php";
        updateStatus();
        break;

    default:
        echo '<h1 style="text-align:center">404 NOT FOUND</h1>';
}
