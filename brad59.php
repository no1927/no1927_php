<?php
    $mysqli = new mysqli('127.0.0.1','root','root','iii');

    mysqli_set_charset($mysqli,'utf8');

    //$mysqli->set_charset('utf8');

    $sql = 'insert into cust (cname,tel,birthday) values ("test2","123","2000-2-2") ';
    //$mysqli->query($sql);
    $sql = 'delete from cust where cname="test2" ';
    $mysqli->query($sql);
    $sql4 ='select * from cust ';
    if($result = $mysqli->query($sql4)){
        while($data=$result->fetch_assoc()){
            foreach($data as $k =>$v){
                echo "{k} : {$v} <br>";
            }
        }

    } else {
        echo 'xx';
    }
