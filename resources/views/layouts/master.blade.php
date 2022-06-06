<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/admin/css/bootstrap.css">
    <link rel="stylesheet" href="/admin/css/line.css">
    <link rel="stylesheet" href="/admin/css/themify.css">
    <link rel="stylesheet" href="/admin/css/common.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <title> مدیریت |@yield('title') </title>
</head>
<body>


<!-- شروع هدر -->
<header class="header">
    <nav class="navbar fixed-top">
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand">
                    <div class="brand-image brand-big">
                        <img src="assets/image/ld.png" alt="logo" style="width: 70px;" class="logo-big">
                    </div>
                </a>
            </div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                <li class="nav-item"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="assets/image/avatar.jpg"  class="avatar rounded-circle"></a></li>
                <li class="pl-4"><span>محمد امین اسدی رحمانی</span></li>

            </ul>
        </div>
    </nav>
</header>





<div class="page-content d-flex align-items-stretch">
@include('master.menu.index')
</div>





@yield('content')











<script src="/admin/js/jquery.js"></script>
<script src="/admin/js/bootstrap.js"></script>
<script src="/admin/js/nicescroll.js"></script>
<script src="/admin/js/app.js"></script>
</body>
</html>
