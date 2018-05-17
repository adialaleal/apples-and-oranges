<?php

/*
 * Complete the countApplesAndOranges function below.
 */
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {

    $fo = [];
    $fa = [];
    foreach ($apples as $ka)
        $fapple = $ka + $a;
      if ($fapple >= $s)
        array_push($fa, 1);

    foreach ($oranges as $ko)
        $forange = $ko + $b;
      if ($forange <= $t)
        array_push($fo,1);

      if (count($fa) > 0) {
        print count($fa);
      }else{
        print "0";
      }
      echo "\n";
      if (count($fo) > 0) {
        print count($fo);
      }else{
        print "0";
      }

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
