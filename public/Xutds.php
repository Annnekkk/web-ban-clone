<?php require_once('../head.php'); ?>
<?php require_once('../sidebar.php'); ?>
<title>CLONE FACEBOOK | <?=$site['site_tenweb'];?></title>
<div class="mobile-menu-overlay"></div>
<?php require_once('../model/Buy.php');?>
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Danh Sách Các Loại Xu</h4>
            </div>
            <div class="pd-20 card-box height-100-p">
                <?php $result = $ketnoi->query("SELECT * FROM `category` WHERE  pin = 'mailclone' AND `display` = 'show' "); ?>
                <?php require_once('../public/Buy.php');?>
            </div>
        </div>
        <?php require_once('../foot.php'); ?>