<?php
$samplefile = 'sample.txt';
$fp = fopen($samplefile, 'w+');
if(!$fp) {
  exit("ファイルが存在しないか異常があります。");
}
if(!flock($fp, LOCK_EX)) {
  exit("ファイルをロックできませんでした。");
}
fwrite($fp, "データをファイルに書き込み!");  //ファイルに書き込み
fflush($fp);  // 出力をフラッシュ
flock($fp, LOCK_UN);  // ロックを解放
fclose($fp);  //ファイルをクローズ
?> 
