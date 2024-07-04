<?php
header('Content-Type: text/plain');

for ($i = 1; $i <= 42; $i++) {
  $ar[] = $i;
}

shuffle($ar); #亂數排序

print_r($ar);

echo implode('', $ar); #把陣列接成字串
# explode 字串切成陣列