<?php
header('Content-Type: text/plain');

$ar1 = array(2, 4, 6);
$ar2 = [2, 4, 6];
$ar3 = array(
  'male',
  'name' => 'shin',
  'age' => 25,
  'hello',
);
$ar4 = [
  'name' => 'shin',
  'age' => 25,
];

print_r($ar3);
var_dump($ar4);
echo count($ar3);
