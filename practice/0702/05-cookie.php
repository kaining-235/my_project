<?php
setcookie("my_cookie", "123"); # 設定
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo $_COOKIE['my_cookie']; # 讀取
  ?>
</body>

</html>