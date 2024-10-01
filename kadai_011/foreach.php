<?php
// 配列
$onion_data = ['name'=>'玉ねぎ','値段'=>'200','産地'=>'北海道'];

// 連想配列出力
foreach($onion_data as $key => $value) {
    echo "{$key}:{$value}<br>";
}
?>