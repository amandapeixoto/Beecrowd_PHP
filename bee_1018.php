<?php
$n = intval(readline());
echo "$n\n";
$cem = intval($n / 100);
$n %= 100;
$cin = intval($n / 50);
$n %= 50;
$vin = intval($n / 20);
$n %= 20;
$dez = intval($n / 10);
$n %= 10;
$cinc = intval($n / 5);
$n %= 5;
$dois = intval($n / 2);
$n %= 2;
$um = $n;
echo "$cem nota(s) de R$ 100,00\n";
echo "$cin nota(s) de R$ 50,00\n";
echo "$vin nota(s) de R$ 20,00\n";
echo "$dez nota(s) de R$ 10,00\n";
echo "$cinc nota(s) de R$ 5,00\n";
echo "$dois nota(s) de R$ 2,00\n";
echo "$um nota(s) de R$ 1,00\n";
?>