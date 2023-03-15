<?php

while (true) {
  list($h1, $m1, $h2, $m2) = explode(" ", fgets(STDIN));

  if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
    break;
  }

  $minutos1 = $h1 * 60 + $m1;
  $minutos2 = $h2 * 60 + $m2;

  if ($minutos2 <= $minutos1) {
    $minutos2 += 1440;
  }

  $diferenca = $minutos2 - $minutos1;
  echo "$diferenca\n";
}
?>