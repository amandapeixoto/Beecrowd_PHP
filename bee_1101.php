<?php
while (true) {
  $input = trim(fgets(STDIN));
  $numbers = explode(" ", $input);
  $m = intval($numbers[0]);
  $n = intval($numbers[1]);
  
  if ($m <= 0 || $n <= 0) {
    break;
  }
  
  $sum = 0;
  $output = "";
  for ($i = min($m, $n); $i <= max($m, $n); $i++) {
    $output .= $i . " ";
    $sum += $i;
  }
  echo $output . "Sum=$sum\n";
}
?>