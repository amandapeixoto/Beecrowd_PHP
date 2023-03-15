<?php
//Funciona fora do bee
while ($linha = fgets(STDIN)) { 
  $numero_de_lesmas = intval(trim($linha)); 
  $velocidades_lesmas = explode(" ", fgets(STDIN)); 
  $mais_rapido = max($velocidades_lesmas); 
  if ($mais_rapido < 10) {
    echo "1\n"; 
  } elseif ($mais_rapido < 20) {
    echo "2\n"; 
  } else {
    echo "3\n";
  }
}

?>