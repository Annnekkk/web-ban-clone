<?php

$total_ticket_dang_xu_ly = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `ticket` WHERE `status` = 'xuly' ")) ['COUNT(*)'];
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/home/" class="nav-link">HOME</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="https://www.facebook.com/Admin.SpZangYT/" class="nav-link">LIÊN HỆ SUPPORT</a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">

            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light">Quản Trị Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="index.php" class="nav-link active">
                        <p>
                            HOME
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="order.php" class="nav-link">
                                <p><i class="nav-icon fa fa-book" aria-hidden="true"></i> ĐƠN HÀNG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="thanh-vien.php" class="nav-link">
                                <p><i class="nav-icon fas fa-user-friends"></i> THÀNH VIÊN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="nap-the.php" class="nav-link">
                                <p><i class="nav-icon fa fa-credit-card"></i> NẠP THẺ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tai-khoan.php" class="nav-link">
                                <p><i class="nav-icon fa fa-book" aria-hidden="true"></i> TÀI KHOẢN</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="chuyen-muc.php" class="nav-link">
                                <p><i class="nav-icon fa fa-tag" aria-hidden="true"></i> THỂ LOẠI</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="bank.php" class="nav-link">
                                <p><i class="nav-icon fa fa-tag" aria-hidden="true"></i> NGÂN HÀNG</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="cai-dat.php" class="nav-link">
                                <p><i class="nav-icon fa fa-cogs" aria-hidden="true"></i> CÀI ĐẶT WEBSITE</p>
                            </a>
                                            <a href="/log-out/" class="btn btn-warning btn-block">Đăng xuất</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

