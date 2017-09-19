<?php
$myyear=1996;
$currentyear=2017;
$m=$currentyear-$myyear;
echo $m; 
?>
<?php
$myyear=1996;
$mymonth=3;
$myday=2;
$currentyear=2017;
$currentmonth=9;
$currentday=19;
if($mymonth<$currentmonth){
	echo "День рождения уже прошел"
} else {
	echo "День рождения еще не наступил"
}
?>