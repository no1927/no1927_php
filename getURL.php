<?php
$fp = fopen("https://tw.money.yahoo.com/currency-converter",'r');
$isStart=false;
while ($c=fgets($fp)){     //fgetc , fgets , fgetss (去除html)
    if(preg_match('/head/',$c)) {echo $c;}
    if(preg_match('/link rel/',$c)) {echo $c;}
    if(preg_match('/<div data-region="td-applet-abu-bank_bestexchange">/',$c)) {
        $isStart=true;
    }
    if($isStart){
        echo $c;
        if(preg_match('/END td-applet-abu-bank_bestexchange/',$c)) {break;}

    }

}
fclose($fp);