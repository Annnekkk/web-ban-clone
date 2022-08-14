<?php
    require_once "../config.php";
    $result = json_decode(curl_get("https://api.web2m.com/historyapimomo/".$site['token_momo']), true);
    foreach($result['momoMsg']['tranList'] as $data)
    {
        $partnerId      = $data['partnerId'];               // SỐ ĐIỆN THOẠI CHUYỂN
        $comment        = $data['comment'];                 // NỘI DUNG CHUYỂN TIỀN
        $tranId         = $data['tranId'];                  // MÃ GIAO DỊCH
        $partnerName    = $data['partnerName'];             // TÊN CHỦ VÍ
        $id             = parse_order_id($comment);         // TÁCH NỘI DUNG CHUYỂN TIỀN
        $amount         = $data['amount'];
        if ($id)
        {
            $check_code = $ketnoi->query("SELECT * FROM momo WHERE tranId = '$tranId' ");
            $check_username = $ketnoi->query("SELECT * FROM users WHERE id = '$id' ");
            if($check_username)
            {
                $array_user = $check_username->fetch_array();
                if($check_code->fetch_assoc() == 0)
                {
                    $create = $ketnoi->query("INSERT INTO momo SET 
                        `tranId` = '$tranId',
                        `username` = '".$array_user['username']."',
                        `comment` = '$comment',
                        `time` = '".time()."',
                        `partnerId` = '$partnerId',
                        `amount` = '$amount',
                        `partnerName` = '$partnerName' ");
                        
                    if ($create)
                    {
                        $ketnoi->query("INSERT INTO `log` SET 
                        `content`= '+ ".format_cash($amount)."  lý do: Nạp MOMO Auto  #".$tranId." ',
                        `createdate` = now(),
                        `username`= '".$array_user['username']."' ");
                        $ketnoi->query("UPDATE users SET 
                        `money` = `money` + '".$amount."',
                        `total_nap` = `total_nap` + '".$amount."' WHERE `username` = '".$array_user['username']."' ");
                    }
                }
            }
        }
    }