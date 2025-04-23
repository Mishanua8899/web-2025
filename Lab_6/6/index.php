<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function factorial(int $n) {
        if($n <= 1) {
            return 1;
        } else{
            return $n * factorial($n - 1);
        }
      }
      echo factorial(4);

    ?>
</body>
</html>