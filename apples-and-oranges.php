<?php

/*
 * Complete the countApplesAndOranges function below.
 */
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    //Definindo variáveis = 0
    $fruito = $fruito = 0;
    //Executando a contagem de elementos do array para posterior calculo
    for ($i = 0; $i < count($apples); $i++){
     /* Se o calculo da distancia da árvore $a com a distância da fruta caída,
      * for maior que o ponto inicial da casa, incrementa-se na variável $fruita
      */
      $fapple = ($a + $apples[$i]);
        if ($fapple >= $s && $fapple <= $t){
        $fruita++;
      }
    }
    // Imprime o resultado da variavel $fruita
    print $fruita;
    // Salto de linha
    echo "\n";
    //Executando a contagem de elementos do array para posterior calculo
    for ($i = 0; $i < count($oranges); $i++){
      /* Se o calculo da distancia da árvore $b com a distância da fruta caída,
       * for menor que o ponto final da casa, incrementa-se na variável $fruito
       */
      $forange = ($b + $oranges[$i]);
        if ($forange >= $s && $forange <= $t){
        $fruito++;
      }
    }
    // Imprime o resultado da variavel $fruito
    print $fruito;
}

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);

$s = intval($st[0]);

$t = intval($st[1]);

fscanf($__fp, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);

$a = intval($ab[0]);

$b = intval($ab[1]);

fscanf($__fp, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($__fp, "%[^\n]", $apple_temp);

$apple = array_map('intval', preg_split('/ /', $apple_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($__fp, "%[^\n]", $orange_temp);

$orange = array_map('intval', preg_split('/ /', $orange_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apple, $orange);

fclose($__fp);
