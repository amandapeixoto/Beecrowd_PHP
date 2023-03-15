<?php
$x = readline();
$y = readline();
if($x > $y){
  $maior = $x;
} else {
  $maior = $y;
}
if($y < $x){
  $menor = $y;
} else {
  $menor = $x;
}
$menor+=1;
$soma = 0;
while($menor < $maior){
    if($menor % 2 != 0){
        $soma+=$menor;
    }  $menor+=1;
}
echo "$soma\n";
?>