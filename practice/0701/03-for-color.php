<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    td {
      width: 50px;
      height: 50px;
      background-color: #f00;
    }
  </style>
</head>

<body>

  <table>
    <?php for ($i = 0; $i < 16; $i++) : ?>
      <tr>
        <?php for ($k = 0; $k < 16; $k++) : ?>
          <td style="background-color: #<?= sprintf("%X%X", $i, $k) ?>0;"></td>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>
</body>

</html>