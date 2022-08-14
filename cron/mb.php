<?php
    require_once "../config.php";
    $data = json_decode(curl_get("https://api.web2m.com/historyapimb/".$site['pass_stk']."/".$site['stk_bank']."/".$site['token_bank'].""), true);
    foreach($data['data'] as $mb)
    {
        $magd   = explode('\\', $mb['refNo'])[0];
        $sotien = $mb['creditAmount'];
        $cmt    = $mb['description'];
        $tien2  = $mb['debitAmount'];
        $id     = parse_order_id($cmt);
        if (isset($id))
        {
            $check_username = $ketnoi->query("SELECT * FROM users WHERE id = '$id' ");
            if($check_username)
            {
                $check_code = $ketnoi->query("SELECT * FROM bank_auto WHERE tid = '$magd' ");
                if($check_code->fetch_assoc() == 0)
                {
                    $array_user = $check_username->fetch_array();
                    $create = $ketnoi->query("INSERT INTO bank_auto SET 
                    `tid` = '$magd',
                    `description` = '$cmt',
                    `amount` = '$sotien',
                    `time` = now(),
                    `username` = '".$array_user['username']."' ");
                    if ($create)
                    {
                        $ketnoi->query("INSERT INTO `log` SET 
                        `content`= '+ ".$sotien."  lý do: Nạp Bank Auto ".$magd." ',
                        `createdate` = now(),
                        `username`= '".$array_user['username']."' ");
                        $ketnoi->query("UPDATE users SET 
                        `money` = `money` + '".$sotien."',
                        `total_nap` = `total_nap` + '".$sotien."' WHERE `username` = '".$array_user['username']."' ");
                    }
                }
            }
        }
    }