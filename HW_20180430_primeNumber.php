<h1>1-100的質數為粉紅色區塊</h1>
<table border=""1" width="60%">
<tr>
    <?php
    for($n=0;$n<=4;$n++){
        echo '<tr>';
        for($j=1;$j<=20;$j++){
            $num=($n*20)+$j;
            //判斷$num是否為質數, 可被1跟自己以外的數字整除為質數
            $isPrimeNumber=false;
            if($num!=1) {
                $isPrimeNumber=true;
                for($c=1;$c<$num;$c++){
                    if($c != 1) {
                        $isPrimeNumber=($num % $c ==0 )? false:true;
                    }
                    if(!$isPrimeNumber) {break;}
                }

            }

            echo '<td bgcolor="' , (($isPrimeNumber)?'pink':'lightgray') ,  '">', "{$num}</td>";
        }
        echo '</tr>';
    }
    ?>
</tr>
</table>
