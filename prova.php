<?php

$a = 5;
$b = 3;
$c = ($a>$b)?true:false;
print $c;
//
$a=10;
$b=2;
$j=$a/2;
for ($i=0;$i<$j;$i++){
    if ($i % $b == 1) 
	echo "$i";
}
//
$i = 4;
$j = 4;
if($i == $j)
        echo "teste $i";
        echo "teste2 $i";
for($i =0; $i<=10;$i++){
    if($i % 3 ==0)
        continue;
        echo $i;
}
echo "Fim";
//
function soma($b=5, $c=4){
    return $b+$c;
}
echo soma();
//
function f($v, $n) {
		if ($n <= 0) return 1;
		else
		return $v[$n-1] * f($v, $n-2) + 1;
	}
	$a = array(0,1,2,3);
	print (f($a, 4));
?>
