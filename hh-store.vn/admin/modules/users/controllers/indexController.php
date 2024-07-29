<?php

function construct()
{
    // echo "DÙng chung, load đầu tiên";
    load_model('index');
    load('lib', 'validation');
}

function indexAction()
{
    load('helper', 'format');
    $list_users = get_list_users();
    //    show_array($list_users);
    $data['list_users'] = $list_users;
    load_view('index', $data);
}


function loginAction()
{
    global $error, $username, $password, $email, $fullName;
    if (isset($_POST['btn-login'])) {
        $error = array();

        if (empty($_POST['username'])) {
            $error['username'] = 'Tên đăng nhập không được để trống';
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = 'Tên đăng nhập không đúng định dạng';
            } else {
                $username = $_POST['username'];
            }
        }
        if (empty($_POST['password'])) {
            $error['password'] = 'Mật khẩu không được để trống';
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = 'Mật khẩu không đúng định dạng';
            } else {
                $password = md5($_POST['password']);
            }
        }
        //kết luận
        if (empty($error)) {
            if (check_login($username, $password)) {
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                //chuyển hướng
                redirect();
            } else {
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không tồn tại";
            }
        }
    }
    load_view('login');
}

function logoutAction()
{
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    redirect("?mod=users&action=login");
}
// function editAction()
// {
//     $id = (int)$_GET['id'];
//     $item = get_user_by_id($id);
//     show_array($item);
// }

function updateAction()
{

    $info_user = get_user_by_username(user_login());
    $data['info_user'] = $info_user;
    show_array($data);
    load_view('update', $data);
}

function resetAction()
{
    load_view('reset');
}