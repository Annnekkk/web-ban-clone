<?php require_once('head.php');?>
<?php require_once('nav.php');?>
<?php
    if (isset($_POST["submit"]) && isset($_SESSION['admin']))
    {
        $number_random = random('1234567890', 4);
        if (check_img('site_logo') == true)
        {
            $uploads_dir = '../upload/';
            $tmp_name = $_FILES['site_logo']['tmp_name'];
            $create = move_uploaded_file($tmp_name, "$uploads_dir/logo_$number_random.png");
            if($create)
            {
                $ketnoi->query("UPDATE setting SET site_logo = '/upload/logo_$number_random.png' ");
            }
        }
        if (check_img('site_image') == true)
        {
            $uploads_dir = '../upload/';
            $tmp_name = $_FILES['site_image']['tmp_name'];
            $create = move_uploaded_file($tmp_name, "$uploads_dir/thumb_$number_random.png");
            if($create)
            {
                $ketnoi->query("UPDATE setting SET site_image = '/upload/thumb_$number_random.png' ");
            }
        }
        if (check_img('site_favicon') == true)
        {
            $uploads_dir = '../upload/';
            $tmp_name = $_FILES['site_favicon']['tmp_name'];
            $create = move_uploaded_file($tmp_name, "$uploads_dir/favicon_$number_random.png");
            if($create)
            {
                $ketnoi->query("UPDATE setting SET site_favicon = '/upload/favicon_$number_random.png' ");
            }
        }
      $create = $ketnoi->query("UPDATE `setting` SET
        `display_daban` = '".$_POST['display_daban']."',
        `facebook` = '".$_POST['facebook']."',
        `tuyetroi` = '".$_POST['tuyetroi']."',
        `gdganday` = '".$_POST['gdganday']."',
        `color` = '".$_POST['color']."',
        `MEMO_PREFIX` = '".$_POST['MEMO_PREFIX']."',
        `site_show_soluong` = '".$_POST['site_show_soluong']."',
        `site_domain` = '".$_POST['site_domain']."',
        `site_sdt_momo` = '".$_POST['site_sdt_momo']."',
        `site_ten_momo` = '".$_POST['site_ten_momo']."',
        `site_tenweb` = '".$_POST['site_tenweb']."',
        `site_mota` = '".$_POST['site_mota']."',
        `site_baotri` = '".$_POST['site_baotri']."',
        `site_api_card` = '".$_POST['site_api_card']."',
        `site_ck_card` = '".$_POST['site_ck_card']."',
        `site_gmail` = '".$_POST['site_gmail']."',
        `site_tukhoa` = '".$_POST['site_tukhoa']."',
        
        `token_momo` = '".$_POST['token_momo']."',
        `token_bank` = '".$_POST['token_bank']."',
        `stk_bank` = '".$_POST['stk_bank']."',
        `pass_stk` = '".$_POST['pass_stk']."'
        ");


      if ($create)
      {
        echo '<script type="text/javascript">swal("Th??nh C??ng","L??u th??nh c??ng","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
        die;
      }
      else
      {
        echo '<script type="text/javascript">swal("Th???t B???i","L???i m??y ch???","error");setTimeout(function(){ location.href = "" },1000);</script>'; 
        die;
      }
    }

?>
<div class="row mb-2">
    <div class="col-sm-6">

    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
                <div class="card-header">
                    <button name="submit" type="submit" class="btn btn-info">L??U THAY ?????I</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-center">Th??ng Tin</h3>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LINK WEBSITE</label>
                                <input type="text" class="form-control" name="site_domain"
                                    placeholder="https://tuanori.com/" value="<?=$site_domain;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Favicon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="site_favicon" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="site_logo" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Upload B??a Web</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="site_image" accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-color-input" class="form-control-label">M??u Ch??? ?????o Web</label>
                                <input class="form-control" type="color" value="<?=$site['color'];?>" name="color">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">T??N WEB</label>
                                <input type="text" class="form-control" name="site_tenweb" placeholder="ZANG YT"
                                    value="<?=$site_tenweb;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">M?? T???</label>
                                <input type="text" class="form-control" name="site_mota"
                                    placeholder="H??? th???ng b??n clone gi?? r???" value="<?=$site_mota;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">T??? KH??A</label>
                                <input type="text" class="form-control" name="site_tukhoa"
                                    placeholder="shop clone, clone shop, sell clone, clone gia re"
                                    value="<?=$site_tukhoa;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">GMAIL ADMIN</label>
                                <input type="text" class="form-control" name="site_gmail" placeholder="admin@gmail.com"
                                    value="<?=$site_gmail;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Link Facebook Profile ho???c Fanpage</label>
                                <input type="url" class="form-control" name="facebook" placeholder="https://www.facebook.com/spzangyt"
                                    value="<?=$site['facebook'];?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">API NHANTHECAO.COM (<a href="https://nhanthecao.com"
                                        target="_blank">T???o t??i kho???n</a>)</label>
                                <input type="text" class="form-control" name="site_api_card"
                                    placeholder="67799896-9252-4452-815a-084e6a3a1dff" value="<?=$site_api_card;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">N???I DUNG BANK AUTO</label>
                                <input type="text" class="form-control" name="MEMO_PREFIX"
                                    placeholder="V?? d???: naptien_" value="<?=$site['MEMO_PREFIX'];?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">CHI???T KH???U N???P TH???</label>
                                <input type="text" class="form-control" name="site_ck_card" value="<?=$site_ck_card;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF B???O TR??</label>
                                <select class="form-control select2bs4" name="site_baotri" style="width: 100%;">
                                    <option value="<?=$site_baotri;?>"><?=$site_baotri;?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF S??? L?????NG C??N L???I</label>
                                <select class="form-control select2bs4" name="site_show_soluong" style="width: 100%;">
                                    <option value="<?=$site_show_soluong;?>"><?=$site_show_soluong;?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF S??? L?????NG ???? B??N</label>
                                <select class="form-control select2bs4" name="display_daban" style="width: 100%;">
                                    <option value="<?=$site['display_daban'];?>"><?=$site['display_daban'];?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF HI???U ???NG TUY???T R??I</label>
                                <select class="form-control select2bs4" name="tuyetroi" style="width: 100%;">
                                    <option value="<?=$site['tuyetroi'];?>"><?=$site['tuyetroi'];?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>ON/OFF GIAO D???CH G???N ????Y</label>
                                <select class="form-control select2bs4" name="gdganday" style="width: 100%;">
                                    <option value="<?=$site['gdganday'];?>"><?=$site['gdganday'];?></option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="text-center">C???U H??NH MOMO</h3>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TOKEN MOMO</label>
                                <input type="text" class="form-control"
                                    name="token_momo" value="<?=$site['token_momo'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">TOKEN BANK</label>
                                <input type="text" class="form-control"
                                    name="token_bank" value="<?=$site['token_bank'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">STK BANK</label>
                                <input type="text" class="form-control"
                                    name="stk_bank" value="<?=$site['stk_bank'];?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">PASS BANK</label>
                                <input type="text" class="form-control"
                                    name="pass_stk" value="<?=$site['pass_stk'];?>">
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row (main row) -->
<?php require_once('foot.php');?>
<script src="dist/jquery-asColor.js"></script>
<script src="dist/jquery-asGradient.js"></script>
<script src="dist/jquery-asColorPicker.js"></script>
<script src="dist/colorpicker.js"></script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

})
</script>