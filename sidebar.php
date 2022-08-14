<body class="header-dark sidebar-dark">
    
    
    
<?php 
    if(empty($_SESSION['username']))
    {
        die('<script type="text/javascript">setTimeout(function(){ location.href = "/login/" },0);</script>');
    }
?>
<?php
    if ($site['site_baotri'] == 'ON')
    {
        echo '<script type="text/javascript">swal("Thông Báo", "Hello Anh Em, Web Đang Tạm Dừng Hoạt Động Và Sẽ Sớm Trở Lại Trong Một Thời Gian Sắp Tới!!! Anh Em Nào Muốn Mua Bộ Code Web Bán Clone + Mail Cổ Giao Diện Giống Web Của Mình Thì IB Qua Zalo Hoặc Facebook Anh Em Nhé!!! Code Chính Chủ Nên Anh Em Yên Tâm!!!", "warning");</script>';
        die();
    } 
    if ($user['banned'] == 1)
    {
        echo '<script type="text/javascript">swal("Thông Báo", "Tài khoản đã bị khóa!", "warning");
        setTimeout(function(){ location.href = "/log-out/" },3000);</script>';
        die();
    } 
?>
<?php 
    if(isset($_POST['btnGet2FA']) && isset($_SESSION['username']) )
    {
        $key = check_string($_POST['key']);
        $data = json_decode(curl_get($site_domain."2fa/index.php?key=".$key), true);
        if (isset($data['code']))
        {
            echo '<script type="text/javascript">swal("'.$data['code'].'","Mã chỉ tồn tại sau 30s","success");</script>';
        }
    }
    if(isset($_POST['btnDownloadBackup']) && isset($_SESSION['username']) )
    {
        $uid = check_string($_POST['uid']);
        if(empty($uid))
        {
            die('<script type="text/javascript">swal("Thất Bại", "Vui lòng nhập UID cần Download Backup!", "warning");setTimeout(function(){ location.href = "/log-out/" },3000);</script>');
        }
        else
        {
            $file = $site['domain']."backup/$uid.zip";
            header("Content-Type: application/octet-stream");
            header("Content-Transfer-Encoding: Binary");
            header("Content-disposition: attachment; filename=\"$uid.zip\""); 
            echo readfile($file);
        }
    }
?>


   <div class="header" style="background: #009999">
        <div class="header-left">
            <div class="menu-icon dw dw-menu" style="color:#fff"></div>
        </div>
        <div class="header-right">
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll">
                            <ul>
                                <?php $i = 0; $show_logs = $ketnoi->query("SELECT * FROM `thongbao` ORDER BY id desc"); while($row = $show_logs->fetch_assoc() ){ ?>
                                <li>
                                    <a>
                                        <img src="/vendors/images/news.png" alt="<?=$row['content'];?>">
                                        <h3><?=$row['title'];?></h3>
                                        <p><?=$row['content'];?></p>
                                    </a>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="/img/peo.png" alt="">
                        </span>
                        <span class="user-name"><?=$user['username'];?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="/profile/"><i class="dw dw-user1"></i> Trang Cá Nhân</a>
                        <a class="dropdown-item" href="/pay/bank/"><i class="micon dw dw-money-2"></i> Nạp Tiền</a>
                        <a class="dropdown-item" href="/log-out/"><i class="dw dw-logout"></i> Đăng Xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="left-side-bar" style="background:#FFCCFF;">
        <div class="brand-logo" style="background:#009999;">
            <a href="/">
                ZangYT
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                   <div class="content-side content-side-full text-center pb-0" style="margin: 0 auto; padding: 1.125rem 1.125rem 1px; width: auto; height: auto;">
                        <div class="smini-hide">
                            <a class="img-link d-block mb-2" href="/profile/">
                                <img class="img-avatar img-avatar-thumb" src="https://muabmvia.com/assets/media/avatars/boy-avatar-4-1129037.webp" alt="" style="width:50px; height:50px;" >
                                </a>
                                <a class="font-w600 text-dual" style="margin-bottom: 10px; font-weight: bold;" href="/"><?=$user['username'];?></a>
                                <br>
                            <span class="badge badge-danger badge-pill">Đại lý: <?=$user['ck'];?>%</span>    
                            <span class="badge badge-info  badge-pill">Số dư: <b
                                    style="color:yellow;"><?=format_cash($user['money']);?></b>đ</span>
                        </a>
                    
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a href="/" class="dropdown-toggle no-arrow" style="color: #EE0000;">
                            <span class="micon dw dw-house1"  style="color: #EE0000;"></span><span class="mtext" style="color: #EE0000;">Trang Chủ</span>
                        </a>
                    </li>
                        <a href="/pay/bank/" class="dropdown-toggle no-arrow" style="color: #EE0000;">
                            <span class="micon dw dw-money-2" style="color: #EE0000;"></span>
                            <span class="mtext" style="color: #EE0000;"><?=$lang['side3'];?></span>
                        </a>
                    </li>   
                    
               <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" style="color: #EE0000;">
                            <span class="micon dw dw-shopping-cart" style="color: #EE0000;"></span><span
                                class="mtext" style="color: #EE0000;">Mua Hàng</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="/public/mailfree.php" style="color: #EE0000;">Mua Mail Free</a></li>
                            <li><a href="/public/mail0bb.php" style="color: #EE0000;">Mua Mail 0 Bạn Bè</a></li>
                            <li><a href="/public/mailclone.php" style="color: #EE0000;">Mua Mail Clone</a></li>
                            <li><a href="/public/mailnull.php" style="color: #EE0000;">Mua Mail Null</a></li>
                            <li><a href="/public/mailvia.php" style="color: #EE0000;">Mua Mail Via</a></li>
                            <li><a href="/public/mailviafl.php" style="color: #EE0000;">Mua Mail Via Follow</a></li>

                        </ul>
                    </li> 
                        <a href="/history/orders/" class="dropdown-toggle no-arrow" style="color: #EE0000;">
                            <span class="micon dw dw-shopping-bag1" style="color: #EE0000;"></span>
                            <span class="mtext" style="color: #EE0000;"><?=$lang['side4'];?></span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" style="color: #EE0000;">
                            <span class="micon dw dw-list3" style="color: #EE0000;"></span><span
                                class="mtext" style="color: #EE0000;">Các Website Khác</span>
                        </a>
                        <ul class="submenu">                    
                            <li><a href="https://card.zangyt.xyz/" style="color: #EE0000;">Gạch Thẻ CK Thấp</a></li>
                            <li><a href="https://zangyt.online/" style="color: #EE0000;">Tool TĐS + TTC</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" style="color: #EE0000;">
                            <span class="micon dw dw-chat3" style="color: #EE0000;"></span><span
                                class="mtext" style="color: #EE0000;">Liên Hệ Tạo Web </span>
                        </a>
                        <ul class="submenu">                    
                            <li><a href="https://zalo.me/0562377116" style="color: #EE0000;">Zalo</a></li>
                            <li><a href="https://www.facebook.com/Admin.SpZangYT/" style="color: #EE0000;">Fanpage</a></li>
                            <li><a href="https://www.youtube.com/channel/UCkyBC3_XyBB_wFoNVRY413g" style="color: #EE0000;">Kênh Youtube</a></li>                            
                        </ul>
                    </li>                    
                    
                    
                    
                    <?php if($user['level'] == 'admin'){ ?>
                    <li>
                        <a href="/admin/" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-settings2" style="color: #EE0000;"></span>
                            <span class="mtext" style="color: #EE0000;">Cpanel Admin</span>
                        </a>
                    </li>
                    <?php }?>
                                    <a href="/log-out/" class="btn btn-warning btn-block">Đăng xuất</a>
                </ul>
                
            </div>
        </div>
    </div>
