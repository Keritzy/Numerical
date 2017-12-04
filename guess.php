<?php
error_reporting(0);
echo "Insert Numper : $a";
$a = trim(fgets(STDIN, 1024));
if(is_numeric($a)) $a;else  die(" Not Numper Plz Insert Numper\n");
echo "Insert Numper : $b";
$b = trim(fgets(STDIN, 1024));
if(is_numeric($b)) $b; else die(" Not Numper Plz Insert Numper\n");
$z = $a * $b."\n";
echo "$a x $b = ".$z;
?>
