<?php/* 
*PageName:cqyapi 
*版权所有:爱我玖 
*QQ:452816442 
*time:2019/4/21 03:30 
*/$qq = $_GET['qq'];if(!$qq){@header("Content-type:text/json");$not = array("code" => "-1","msg" => "qq号码输入不正确");echo json_encode($not,JSON_UNESCAPED_UNICODE);}else{@header("Location: mqqapi://card/show_pslcard?src_type=internal&version=1&uin={$qq}&card_type=person&source=sharecard");}?>
