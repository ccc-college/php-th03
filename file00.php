<?php
$sFileName =  "access.log";
$sPath =  $sFileName;
$time = date('H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$data = "{$time}\t{$ip}\r\n";
if($fp = fopen($sPath,"a+")){
    echo 'ファイルオープン成功。<br/>';
}else{
    echo 'ファイルオープン失敗。<br/>';
    exit;
}
flock($fp, LOCK_EX);
if(fwrite($fp,$data)){    //ファイルへ書き込み
    echo 'ファイル書き込み完了。<br/>';
}else{
    echo 'ファイル書き込み失敗。<br/>';
    exit;
}
flock($fp, LOCK_UN);
echo 'アクセスログを記録しました。';
fclose($fp); //ファイルポインタを閉じる
?>
