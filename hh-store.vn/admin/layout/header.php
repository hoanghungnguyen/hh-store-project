<!-- <html>
    <head>
        <title>Upload file Ajax</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="public/js/customs.js" type="text/javascript"></script>
        <meta charset="utf-8">
    </head>
    <body>
        <style>
            #show_list_file { width:  200px; height: 200px; overflow: hidden;}
            #show_list_file img { max-width: 100%; max-height: 100%;}
        </style> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- <link rel="stylesheet" href="public/css/login.css"> -->
    <script src="public/js/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="public/js/app.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <a href="">HH_SHOP</a>
                <?php if (is_login()) {
                ?>
                <div id="user-login">
                    <p>Xin chào <strong><?php echo $_SESSION['user_login'] ?></strong> (<a
                            href="?mod=users&action=logout">Thoát</a>)</p>
                </div>
                <?php } ?>
            </div>
            <ul class="menu">
                <li><a href="?">Trang chủ</a></li>
                <li><a href="?mod=page&controller=index&action=detail&id=1">Tin tức</a></li>
                <li><a href="?mod=post&controller=index&action=detail&id=1">Liên hệ</a></li>
                <li><a href="?mod=users&controller=index">Thành Viên</a></li>
                <li><a href="?mod=order">Đơn hàng</a></li>
            </ul>
        </div>
        <!-- end_header -->