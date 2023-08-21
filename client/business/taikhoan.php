<?php
function form_listtk()
{
    adminRender('khachhang/index.php');
}
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function insert_taikhoan($email, $user, $pass)
{
    $sql = "insert into taikhoan(email,user,pass) values('$email', '$user', '$pass')";
    pdo_execute($sql);
}
function checkuser($user)
{
    $sql = "SELECT * FROM `taikhoan` WHERE user = '$user' ";
    $sp = pdo_query_one($sql);
    // dd($sp);
    return $sp;
}

function checkemail($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set user='" . $user . "',pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}
//log in,sign in
function dangky()
{
    if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $pass = $_POST['pass-comfirm'];
        $errors = [];
        
        // Validate email;
        if (empty($_POST['email'])) {
            $errors['email'] = 'Vui lòng nhập email';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email không đúng định dạng vui lòng nhập lại!';
        } else {
            $email = $_POST['email'];
        }
        // Validate uername;
        if (empty($_POST['user'])) {
            $errors['user'] = 'User không được để trống';
        } elseif ($_POST['user'] >= 5) {
            $errors['user'] = 'User phải lớn hơn 5 ký tự';
        } else {
            $user = $_POST['user'];
        }
        // Validate Password
        if (empty($_POST['pass'])) {
            $errors['pass'] = 'Pass không được để trống';
        } else {
            $pass = $_POST['pass'];
        }

        // Validate Password-Comfirm
        if (empty($_POST['pass-comfirm'])) {
            $errors['pass-comfirm'] = 'Password-comfirm không được để trống';
        } elseif ($_POST['pass-comfirm'] != $_POST['pass']) {
            $errors['pass-comfirm'] = 'Password không khớp';
        } else {
            $pass = $_POST['pass-comfirm'];
        }

        if (empty($errors)) {
            insert_taikhoan($email, $user, $pass);
            header('location:' . BASE_URL . 'form-dangnhap');
        }
    }
    clientRender('account/dangky.php', compact('errors'));
}
function form_dangky()
{
    clientRender('account/dangky.php');
}

function dangnhap()
{
    if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $checkuser = checkuser($user);
        $errors = [];
        // if($checkuser['user']){
        // header('location:' . BASE_URL );
        // }else {
        // echo 'Tài khảo không tồn tại';
        // }
        // Validate Password
        if (empty($_POST['pass'])) {
            $errors['pass'] = 'Password không được để trống';
        } else {
            $_SESSION['pass'] = $checkuser;
        }
        // ------------------------------------------------- //
        if (!is_array($checkuser && empty($errors))) {
            // Validate uername;
            if (empty($_POST['user'])) {
                $errors['user'] = 'User không được để trống';
            } else {
                $_SESSION['user'] = $checkuser;
                header('location:' . BASE_URL );
            }
        } else if (is_array($checkuser)) {
        } else {
            $_SESSION['user'] = $checkuser;
            header('location:' . BASE_URL );
        }
    }
    
    clientRender('account/dangnhap.php', compact('errors'));
}
function form_dangnhap()
{
    clientRender('account/dangnhap.php');
}

function edit_taikhoan()
{
    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $id = $_POST['id'];
        $errors = [];

        // Validate email;
        if (empty($_POST['email'])) {
            $errors['email'] = 'Vui lòng nhập email';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email không đúng định dạng vui lòng nhập lại!';
        } else {
            $email = $_POST['email'];
        }

        // Validate uername;
        if (empty($_POST['user'])) {
            $errors['user'] = 'User không được để trống';
        } elseif ($_POST['user'] >= 5) {
            $errors['user'] = 'User phải lớn hơn 5 ký tự';
        } else {
            $user = $_POST['user'];
        }

        // Validate Password
        if (empty($_POST['pass'])) {
            $errors['pass'] = 'Pass không được để trống';
        } else {
            $pass = $_POST['pass'];
        }

        // Validate Address;
        if (empty($_POST['address'])) {
            $errors['address'] = 'address không được để trống';
        } elseif ($_POST['address'] >= 5) {
            $errors['address'] = 'address phải lớn hơn 5 ký tự';
        } else {
            $user = $_POST['address'];
        }

        // Validate tell
        if (empty($_POST['tel'])) {
            $errors['tel'] = 'Phone không được để trống';
        } elseif ($_POST['tel'] != 10) {
            $errors['tel'] = 'Phone không đúng ( 10 number )';
        } else {
            $user = $_POST['tel'];
        }

        //---------------------------------//

        if (empty($errors)) {
            $errors['capnhat'] = 'Cập nhật không thành công';
        } else {
            update_taikhoan($id, $user, $pass, $email, $address, $tel);
            header('location:' . BASE_URL . 'form-dangnhap');
            $_SESSION['user'] = checkuser($user, $pass);
        }
    }
    clientRender('account/edit_taikhoan.php', compact('errors'));
}

function form_edit_taikhoan()
{
    clientRender('account/edit_taikhoan.php');
}

function quen_mk()
{
    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
        $email = $_POST['email'];
        $errors = [];
        $checkemail = checkemail($email);

        // Validate email;
        if (empty($_POST['email'])) {
            $errors['email'] = 'Vui lòng nhập email';
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Email không đúng định dạng vui lòng nhập lại!';
        } else {
            $checkemail = checkemail($email);
        }
        if (empty($errors)) {
            if (is_array($checkemail)) {
                $errors = "Mat khau cua ban la: " . $checkemail['pass'];
            } else {
                $thongbao = "Email nay khong ton tai";
            }
        }
    }
    clientRender('account/quenmk.php', compact('errors'));
}

function form_quenmk()
{
    clientRender('account/quenmk.php');
}

function list_taikhoan()
{
    $listtaikhoan = loadall_taikhoan();
}
