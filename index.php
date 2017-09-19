<?php
#$myyear=1996;
#$currentyear=2017;
#$m=$currentyear-$myyear;
#echo $m; 
?>
<?php
$myyear=1996;
$mymonth=7;
$myday=20;
$currentyear=2017;
$currentmonth=9;
$currentday=19;
$m=$currentyear-$myyear;
if($mymonth<$currentmonth){
	echo "День рождения уже прошел ";
	echo "<br>";
	echo "$m лет";
} else {
	if($mymonth=$currentmonth) {
		if ($myday<$currentday){
			echo "День рождения уже прошел ";
			echo "<br>";
		echo "$m лет";}
	}
} else {

	$m=$m-1;
	echo "День рождения еще не наступил";
	echo "<br>";
	echo  "$m лет";
}
?>