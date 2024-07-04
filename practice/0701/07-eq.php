<?php
header('Content-Type: text/plain');

$ar1 = array(2, 4, 6);
$ar2 = $ar1;
$ar3 = &$ar1;

$ar1[1] = 100;

print_r($ar1);
print_r($ar2);
print_r($ar3);
