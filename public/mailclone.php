<?php require_once('../head.php'); ?>
<?php require_once('../sidebar.php'); ?>
<title>MAIL CLONE | <?=$site['site_tenweb'];?></title>
<div class="mobile-menu-overlay"></div>
<?php require_once('../model/Buy.php');?>
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <div class="pd-20"  style="border-radius:5px; background: #d262e3 linear-gradient(135deg,#d262e3 0,#0665d0 100%)!important; height: 60px;">
                <center><h4 class="h4" style="color:#fff">DANH SÁCH MAIL</h4></center> 
                
            </div>
                        <div class="pd-20 card-box height-100-p">
                <?php $result = $ketnoi->query("SELECT * FROM `category` WHERE  pin = 'mailclone'AND `display` = 'show' "); ?>
                <?php require_once('../public/Buy.php');?>
            </div>
        </div>
        <?php if($site['gdganday'] == 'ON'){?>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">50 GIAO DỊCH GẦN ĐÂY</h4>
                <?php $result = $ketnoi->query("SELECT * FROM `ls_mua` ORDER BY id desc "); ?>
            </div>
            <div class="pd-20 card-box height-100-p">
                <div class="table-responsive">
                    <table class="table hover multiple-select-row nowrap">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Khách Hàng</th>
                                <th>Giao Dịch</th>
                                <th>Thời Gian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
			$i = 0;
			$querryy = $ketnoi->query("SELECT * FROM `ls_mua` ORDER BY id desc limit 50 ");
			while ($row = mysqli_fetch_array($querryy)) 
			{
			?>
                            <tr>
                                <td><?=$i;?></td>
                                <td><?=$row['username'];?></td>
                                <td><?=$row['content'];?></td>
                                <td><span data-toggle="tooltip" data-placement="top" title="Thời gian"
                                        class="badge badge-dark"><?=$row['createdate'];?></span></td>
                            </tr>
                            <?php $i++; }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- multiple select row Datatable End -->
         <?php }?>
        
        
        <?php require_once('../foot.php'); ?>