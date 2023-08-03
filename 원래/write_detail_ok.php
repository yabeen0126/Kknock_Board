<?php

include("db.php");

//각 변수에 write.php에서 input name값들을 저장한다
$wnum = $_POST['wnum'];
$wusedate = $_POST['wusedate'];
$wbelong = $_POST['wbelong'];
$wbusiname = $_POST['wbusiname'];
$wpaytype = $_POST['wpaytype'];
$wusedetail = $_POST['wusedetail'];
$wamount = $_POST['wamount'];
$wtradename = $_POST['wtradename'];
$wnote = $_POST['wnote'];
$wphonenum = $_POST['wphonenum'];
if ($wnum && $wusedate && $wbelong && $wbusiname  && $wpaytype && $wusedetail && $wamount && $wtradename && $wnote && $wphonenum) {
    $sql = mq("insert into detail(num,usedate,belong,businame,paytype,usedetail,amount,tradename,note,phonenum) values('" . $wnum . "','" . $wusedate . "','" . $wbelong . "','" . $wbusiname . "','" . $wpaytype . "','" . $wusedetail. "','" . $wamount. "','" . $wtradename. "','" . $wnote. "','" . $wphonenum. "')");
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='/phplogin/mainboard.php';</script>";
} else {
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>