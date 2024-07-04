<?php
header('Content-Type: text/plain');

$ar = [
  3 => 'abc',
  '3' => 'def',
  'name' => 'david',
  'pw' => 'pass',
];
foreach ($ar as $k => $v) {
  echo "$k : $v \n\n";
}
