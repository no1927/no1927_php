<?php
//作業,用交換原理完成洗牌
$poker=array();
$isRepeat=false;

//洗牌

for($i=0;$i<=51;$i++) {
    $poker[$i] = $i;
}
for($i=0;$i<=1000; $i++) {
    $p1=rand(0,51);
    $p2=rand(0,51);
    $tmp=$poker[$p1];
    $poker[$p1]=$poker[$p2];
    $poker[$p2]=$tmp;

    }
foreach($poker as $k=>$v)
{
    echo "{$k}->{$v}<br>";
}