<?php
/*
Сумма простых чисел, меньших 10 - это 2 + 3 + 5 + 7 = 17.
Напишите программу на PHP, которая найдет сумму всех простых чисел, меньших двух миллионов.
*/

$n = 2000000;
$res = str_repeat("1", $n);

for($i=2;$i<$n;$i++)
    if($res[$i]==1)
        for($j=$i*$i;$j<=$n;$j+=$i)
            $res[$j]="0";

for($i=2;$i<$n;$i++)
    if($res[$i]==="1")
        $sum = $sum + $i;
echo $sum;

?>