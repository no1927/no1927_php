<!--//用 if 判斷閏年-->
<h>請輸入西元年後按 [check] 判斷是否為閏年 V2.</h>

<?php
$year="";
$r1="";
$r2="";
$r3="";
$result="";

if (isset($_GET['year']) )  {
    $year=$_GET['year'];
    if ($year % 400==0){
        $result='閏年';
    } else if ($year % 100 =='0') {
        $result='沒有閏年';
    } else if ($year % 4=='0') {
        $result='閏年';
    } else  {
        $result='沒有閏年x';
    }
}
?>
<form>
    <input type="'text" name="year" value="<?php echo $year; ?>"/>
    <input type="submit" value="check" />
    <?php
    echo $result;
    ?>
</form>
