<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="180x180" href="https://zangyt.xyz/upload/favicon_5148.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://zangyt.xyz/upload/favicon_5148.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://zangyt.xyz/upload/favicon_5148.png">
    <meta property="og:title" content="ZangYT" />
    <meta property="og:image" content="https://zangyt.xyz/upload/favicon_5148.png" />
    <meta property="og:description" content="Hệ Thống Bán Clone Facebook" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="shop clone, shop via, shop bm, clone gia re, muabm, mua clone, traodoisub" />
    <meta name="description" content="Hệ Thống Bán Clone Facebook" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/core.css">
    
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/vendors/styles/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/src/scripts/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document) .ready(function () {
            setTimeout(function() {
                    $("#dnbtdevModal") .modal('show');
                }, 200);
        });
    </script>
    <style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    }

    ::-webkit-scrollbar-thumb {
        background: #110d49;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }

    .btn-primary {
        color: #fff;
        background-color: #110d49;
        border-color: #110d49;
    }

    .text-blue {
        color: #110d49;
    }
    </style>
</head>



<div class="list-group">
    <div class="row">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <?php $clone_conlai = mysqli_fetch_assoc($ketnoi->query("SELECT COUNT(*) FROM `taikhoan` WHERE `code` = '".$row['code']."' AND `username` IS NULL AND `status` = 'live' ")) ['COUNT(*)'];?>
        <?php $clone_daban = mysqli_fetch_assoc($ketnoi->query("SELECT COUNT(*) FROM `taikhoan` WHERE `code` = '".$row['code']."' AND `username` IS NOT NULL ")) ['COUNT(*)'];?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <a class="block block-rounded block-bordered block-link-pop block-themed text-center clone-item" href="javascript:void(0)"  >
                    
                 <style>
                        .card .tasks_report .selectpackage  {
                    	-webkit-transform: scale(1);
                    	transform: scale(1);
                    	-webkit-transition: .90000000000s ease-in-out;
                    	transition: .90000000000s ease-in-out;
                    }
                    .card:hover {
                    	-webkit-transform: scale(1.05);
                    	transform: scale(1.05);
                    }
                    </style>   
<div class="card tasks_report selectpackage" style="border: 1px solid #000;">
        <div class="ribbon-wrapper">
        </div>
        <div class="col-md-12" style="position: static;">
            <label class="custom p-3" style="cursor: auto;">
                <span class="d-flex align-items-center" style="margin-left: -15px;">
					    
						
				<ul>
					<li>		
						<span class="flex-fill font-size-h6 font-w400 js-tooltip-enabled">
								<h6> <?=$row['title'];?> <br> Số lượng đã bán:  <strong class="jatext" style="color: #007bff;"><?=format_cash($clone_daban);?></strong> Tài khoản
                                </h6> </span> </li>
					<li>			
						<span class="d-block">
							<h6 class="h4 font-w700 mb-2 text-muted">
							    <font style="color: red;">Giá: <?=format_cash($row['money']);?>đ</font>
							</h6> </span> </li>
					<li>
							<p class="h6 text-muted mb-1">Còn lại: <strong class="badge badge-success badge-pill font-size-h6 pl-2 pr-2"><?=format_cash($clone_conlai);?></strong>
                            </p> </li>
					<li>

                </ul>
                
                
                </span>
            </label>
        </div>  
                <div class="col-md-12 text-center" id= "va1" style="margin-top: -10px;margin-bottom: 10px; "><button class="btn btn-warning btn-sm btn-mua-ngay active" style="margin-top:10px; color:#fff; background-color: #0099ff; border: 1px solid #0099ff;
                        " data-toggle="modal" data-target="#modal_<?=$row['code'];?>"
                             
                               class="btn btn-warning btn-sm btn-mua-ngay"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> MUA NGAY</button>
                </div>
            </div>
            </a>
            </div>
            
        <div class="modal fade" id="modal_<?=$row['code'];?>" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="border: 10px solid #fff; padding-top: 15px;">
                        <div class="modal-body"> 
                            <form method="post" action="" id="formMua<?=$row['code'];?>">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p style="text-transform: uppercase;"><i class="fa fa-archive" aria-hidden="true"></i> Sản phẩm: <b id="show_name"><?=$row['title'];?></b>
                                    </p>
                                    <p><i class="fa fa-info-circle" aria-hidden="true"></i> Mô tả: <p id="show_mota"><p>- Mail Yahoo Die</p><p>- Bảo hành 24H kể từ khi mua</p><p>- Định dạng Mail: Mail|ID|Name|Registration Date|Friends|Birthday|Hometown|Current|Locale|Timezone</p></p>
                                    </p>
                                    <p><i class="fa fa-magic" aria-hidden="true"></i> Hiện còn: <b id="show_soluong"><?=format_cash($clone_conlai);?></b>
                                    <p><i class="fa fa-money" aria-hidden="true"></i> Đơn giá: <b id="show_price"><?=format_cash($row['money']);?>đ</b>
                                    </p>
                                    <input type="text" value="<?=$row['code'];?>" name="code" hidden="">
                                    <input type="text" value="traodoisub" name="loai" hidden="">
                                    <p style="display: flex;">
                                        <font style="width: 180px; margin-top:6px;"> <i class="fa fa-plus-square" aria-hidden="true"></i> Số lượng mua</font>
                                        <input type="number"  id="soluong_<?=$row['code'];?>" name="soluong" class="form-control" required="required" style="margin-top: -5px; border-radius: 25px;" value="0">
                                    </p>
                                    <p><i class="fa fa-calculator" aria-hidden="true"></i> Tổng tiền: <font color="red"><b  id="ketqua_<?=$row['code'];?>"></b></font>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" id="price_temp" class="form-control" value="60000">
                                    <input type="hidden" id="type_bm" class="form-control" value="1 BM50 Kèm Via Gốc">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                           <button type="submit" id="btnBuy<?=$row['code'];?>" name="btnBuy"
                                class="btn btn-outline-primary" style="border-radius:25px;"><i class="fa fa-cart-plus" aria-hidden="true"></i> MUA HÀNG</button>
                                
                            <button type="button" id="btnDong<?=$row['code'];?>" class="btn btn-outline-danger"
                                data-dismiss="modal" style="border-radius:25px;"><i class="fa fa-window-close-o" aria-hidden="true"></i> Đóng</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>


        <script type="text/javascript">
        $('#soluong_<?=$row['code'];?>').keyup(function() {
            var soluong = $("#soluong_<?=$row['code'];?>").val();
            var ketqua1 = <?=$row['money'];?>  * soluong;
            var ketqua = ketqua1 - ketqua1 * <?=$user['ck'];?> / 100;
            $('#ketqua_<?=$row['code'];?>').html(ketqua.toString().replace(
                /(.)(?=(\d{3})+$)/g, '$1,'));
        });
        $(document).ready(function($) {
            $('#formMua<?=$row['code'];?>').on('submit', function(evt) {
                $('#btnDong<?=$row['code'];?>').html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Đang check live!'
                ).prop('disabled', true);
                $('#btnBuy<?=$row['code'];?>').hide();
            });
        });
        </script>
        <?php }?>
    </div>
</div>