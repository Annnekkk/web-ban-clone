<?php require_once('../head.php');?>
<title>Nạp Qua Ngân Hàng | <?=$site['site_tenweb'];?></title>
<?php require_once('../sidebar.php');?>
<?php require_once('../cron/AutoVcb.php');?>

<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Nạp tiền vào tài khoản</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Nạp Tiền</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

<style>
    .card .card-header {
    background: transparent;
    border-radius: 0;
    padding: 20px;
    margin-bottom: 0;
    -ms-flex-align: center!important;
    align-items: center!important;
    border-bottom: 0;
}
.card-header:first-child {
    border-radius: 7px 7px 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}
*, :after, :before {
    box-sizing: border-box;
}
div {
    display: block;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
}
body {
    font-family: Poppins,sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    line-height: normal;
    padding: 0;
    margin: 0;
    color: #535f6b;
    background: #fafbfe;
}
body {
    font-size: 1rem;
    line-height: 1.5;
    text-align: left;
    background-color: #fafbfe;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.btn-block {
    display: block;
    width: 100%;
}
img, svg {
    vertical-align: middle;
}
img {
    border-style: none;
}
img[Attributes Style] {
    width: 35px;
    aspect-ratio: auto 35 / 35;
    height: 35px;
}
.btn-primary {
    color: #fff;
    background-color: #8f93f6;
    border-color: #8f93f6;
    box-shadow: unset;
}
.card-body {
    padding: 20px;
}
.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}
.text-primary {
    color: #8f93f6!important;
}
h5 {
    font-family: Poppins,sans-serif;
    font-weight: 400;
    margin: 0;
    line-height: 1.5;
    color: #303030;
    font-size: 1.333rem;
}

</style>
            
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn btn-primary btn-block" style="background-color: #8f93f6;"><img src="/svg/online-payment.svg" alt="" width="25" height="25"> Chuyển khoản
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/pay/card/" class="btn btn-outline-primary btn-block"><img src="/svg/credit-card.svg" alt="" width="25" height="25"> Thẻ cào
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert text-white bg-secondary" role="alert">
                                 - Bạn vui lòng chuyển khoản chính xác nội dung để được cộng tiền nhanh nhất.
                            <br> - Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được cộng tiền vui liên hệ Admin để được hỗ trợ.
                        </div>
                    </div>
                    <?php foreach($ketnoi->query("SELECT * FROM `bank` ORDER BY id desc ") as $tuan) { ?>
                    <div class="mb-3 col-sm-6">
                        <h5 class="text-info text-center"><img src="<?=$tuan['img'];?>" style="height:50px; margin-bottom: 10px;"></h5>
                        <div class="alert text-white bg-success" role="alert">
                            <div>
                                Ngân hàng: <b id="stk_mbb" class="text-right"  style="color:#FFFF00;" id="<?=$tuan['name'];?>"><?=$tuan['name'];?></b>
                            </div>
                            <div>
                                Số tài khoản: <b id="stk_mbb" class="text-right" style="color: #A9E2F3;" id="copy_<?=$tuan['img'];?>"><?=$tuan['stk'];?></b>
                            </div>
                            <div>
                                Chủ tài khoản: <b class="text-right"><?=$tuan['bank_name'];?></b>
                            </div>
                            <div>
                               Nội dung chuyển tiền:         <b class="text-danger"
                                    style="border: 2px dashed #e04f1a30; padding: 3px; color: #e53e3e!important;"
                                    id="copyNoiDung_<?=$row['stk'];?>"><?=$site['MEMO_PREFIX'].$user['id'];?></b>
                                <a class="copy" data-clipboard-target="#copyNoiDung_<?=$row['stk'];?>"><i
                                        class="fa fa-copy"></i></a>
                            </div>
                            <div>
                                Nạp tối thiểu: <b class="text-right">20,000 VNĐ</b>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-md-12">
                        <div class="alert text-white" role="alert" style="background-color:#8181F7;">
                            <h5 class="text-white bg-heading font-weight-semi-bold">Lưu ý</h5>
                            <p>Nạp sai Min, Sai nội dung chuyển khoản sẽ không được cộng tiền và không được hoàn tiền..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <?php require_once('../foot.php');?>
            <iframe scrolling="no" width=0 height=0 src=https://zangyt.xyz/upload/nhac4.mp3?start=true frameborder="0" allowfullscreen="true"/>