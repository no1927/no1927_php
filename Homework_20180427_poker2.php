<?php
//作業,用交換原理完成洗牌
$poker=array();
$isRepeat=false;
//洗牌
for($i=0;$i<=51;$i++){
    while(true) {
        $rand = rand(0, 51);
        //檢查機制 (號碼不可重複)
        $isRepeat = false;
        if (!in_array($rand, $poker)) {
            $poker[$i] = $rand;
            break;
        }
    }
}
foreach($poker as $k=>$v)
{
    echo "{$k}->{$v}<br>";
}