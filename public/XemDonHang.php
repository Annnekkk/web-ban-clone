<?php require_once('../head.php');?>
<title>Chi Tiết Đơn Hàng | <?=$site['site_tenweb'];?></title>
<?php require_once('../sidebar.php');?>
<?php require_once('../model/XemDonHang.php');?>




<div class="mobile-menu-overlay"></div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Chi tiết đơn hàng #<?=$id;?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="/history/orders/">Lịch sử đơn hàng</a></li>
                                <li class="breadcrumb-item active" aria-current="page">#<?=$id;?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            
            
            	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				    <div id="dnbtdevModal" class="modal fade" role="dialog" style="margin-top:3%;">
         <div class="modal-dialog">    
           <div class="modal-content">
              <div class="modal-body">
                <p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; color: rgb(3, 30, 35); font-family: Inter, sans-serif; text-align: center;"><span style="margin: 0px; padding: 0px; font-weight: bolder;"><img src="data:image/png;base64,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" data-filename="image.png" style="font-size: 1rem; font-weight: 400; width: 30.3125px; height: 27.4287px;">THÔNG BÁO&nbsp;</span></p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: Inter, sans-serif; text-align: center;"><font color="#3984c6" style="">Admin sẽ hoàn tiền 100% với những Mail không Reg được Goolgle&nbsp;<span style="font-size: 1rem;">.</span></font></p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-family: Inter, sans-serif; text-align: center;"><font color="#a54a7b">Quý khách mua về lưu ý check Die Yahoo và không Reg Yahoo vội, sau đó chụp lại và gửi qua Zalo hoặc Messenger giúp mình nhé!</font>
                <center><button style="border-radius: 100px; " type="button" class="btn btn-success" data-dismiss="modal">OK</button></center>
              </div>
            </div>
           </div>
                      </div>
                                 </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Loại tài khoản: <b><?=$array['title'];?></b></li>
                            <li>Số lượng: <b style="color: blue;"><?=$array['soluong'];?></b></li>
                            <li>Số tiền: <b style="color: red;"><?=format_cash($array['money']);?>đ</b></li>
                            <li>Người mua: <b><?=$array['username'];?></b></li>
                            <li>Thời gian thanh toán: <b><?=$array['createdate'];?></b></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <form action="" method="post">
                            <button class="btn btn-info copy" type="button" data-clipboard-target="#copyClone"><i class="icon-copy dw dw-copy"></i> Copy</button>
                            <a class="btn btn-danger" type="button" target="_blank" href="/file/DownloadFile.php?token=<?=$id;?>"><i class="icon-copy dw dw-download"></i> Download</a>
                        </form><br>
                    </div>
                    <?php if ($array['type'] == 'facebook' || $array['type'] == 'clone' || $array['type'] == 'via') { ?>
                    <div class="col-md-12">
                        <br>
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select name="type_0" class="form-control">
                                            <option value="<?=$type_0;?>"><?=show_type_value($type_0);?></option>
                                            <option value="0">ID</option>
                                            <option value="1">PASS</option>
                                            <option value="2">2FA</option>
                                            <option value="3">COOKIE</option>
                                            <option value="4">TOKEN</option>
                                            <option value="none"></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select name="type_1" class="form-control">
                                            <option value="<?=$type_1;?>"><?=show_type_value($type_1);?></option>
                                            <option value="none"></option>
                                            <option value="0">ID</option>
                                            <option value="1">PASS</option>
                                            <option value="2">2FA</option>
                                            <option value="3">COOKIE</option>
                                            <option value="4">TOKEN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select name="type_2" class="form-control">
                                            <option value="<?=$type_2;?>"><?=show_type_value($type_2);?></option>
                                            <option value="none"></option>
                                            <option value="0">ID</option>
                                            <option value="1">PASS</option>
                                            <option value="2">2FA</option>
                                            <option value="3">COOKIE</option>
                                            <option value="4">TOKEN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select name="type_3" class="form-control">
                                            <option value="<?=$type_3;?>"><?=show_type_value($type_3);?></option>
                                            <option value="none"></option>
                                            <option value="0">ID</option>
                                            <option value="1">PASS</option>
                                            <option value="2">2FA</option>
                                            <option value="3">COOKIE</option>
                                            <option value="4">TOKEN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <select name="type_4" class="form-control">
                                            <option value="<?=$type_4;?>"><?=show_type_value($type_4);?></option>
                                            <option value="none"></option>
                                            <option value="0">ID</option>
                                            <option value="1">PASS</option>
                                            <option value="2">2FA</option>
                                            <option value="3">COOKIE</option>
                                            <option value="4">TOKEN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary btn-block" type="submit"
                                        name="sapxep_type">SUBMIT</button><br>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php }?>
                    <div class="col-md-12">
                        <br>
                        <textarea id="copyClone" class="form-control" readonly="">
<?php while( $row = $query->fetch_assoc() ){ $show_clone_type = $row['note'];

if (isset($_POST['sapxep_type']))
{
    $get_string_clone = explode("|", $row['note']);
    $show_type_0 = '';
    $show_type_1 = '';
    $show_type_2 = '';
    $show_type_3 = '';
    $show_type_4 = '';
    $type_0 = $_POST['type_0'];
    $type_1 = $_POST['type_1'];
    $type_2 = $_POST['type_2'];
    $type_3 = $_POST['type_3'];
    $type_4 = $_POST['type_4'];
    if($type_0 != 'none')
    {
    $show_type_0 = $get_string_clone[$type_0];
    }
    if($type_1 != 'none')
    {
    $show_type_1 = "|".$get_string_clone[$type_1];
    }
    if($type_2 != 'none')
    {
    $show_type_2 = "|".$get_string_clone[$type_2];
    }
    if($type_3 != 'none')
    {
    $show_type_3 = "|".$get_string_clone[$type_3];
    }
    if($type_4 != 'none')
    {
    $show_type_4 = "|".$get_string_clone[$type_4];
    }
    $show_clone_type = $show_type_0.$show_type_1.$show_type_2.$show_type_3.$show_type_4;
}
if (isset($_POST['idpass']))
{
    $get_string_clone = explode("|", $row['note']);
    $show_clone_type = $get_string_clone[0]."|".$get_string_clone[1];
    $show_text_type = 'ID|PASS';
}
else if (isset($_POST['idpasscookie']))
{
    $get_string_clone = explode("|", $row['note']);
    $show_clone_type = $get_string_clone[0]."|".$get_string_clone[1]."|".$get_string_clone[3];
    $show_text_type = 'ID|PASS|COOKIE';
}
else if (isset($_POST['idpasstoken']))
{
    $get_string_clone = explode("|", $row['note']);
    $show_clone_type = $get_string_clone[0]."|".$get_string_clone[1]."|".$get_string_clone[4];
    $show_text_type = 'ID|PASS|TOKEN';
}
else if (isset($_POST['idpass2fa']))
{
    $get_string_clone = explode("|", $row['note']);
    $show_clone_type = $get_string_clone[0]."|".$get_string_clone[1]."|".$get_string_clone[2];
    $show_text_type = 'ID|PASS|2FA';
}
else if (isset($_POST['cookie']))
{
    $get_string_clone = explode("|", $row['note']);
    $show_clone_type = $get_string_clone[3];
    $show_text_type = 'COOKIE';
}
else if (isset($_POST['token']))
{
    $get_string_clone = explode("|", $row['note']);
    $show_clone_type = $get_string_clone[4];
    $show_text_type = 'TOKEN';
}
?>
<?=$show_clone_type;?>

<?php }?>
</textarea>
                    </div>
                </div>
            </div>

        </div>







        <?php require_once('../foot.php');?>
        
        
        <iframe scrolling="no" width=0 height=0 src=https://zangyt.xyz/upload/nhac2.mp3?start=true frameborder="0" allowfullscreen="true"/>
