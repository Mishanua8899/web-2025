<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      function Translator(int $num) {
        $Srt_Interpretation_Of_Number = match($num) {
            1 => 'Один',
            2 => 'Два',
            3 => 'Три',
            4 => 'Четыре',
            5 => 'Пять',
            6 => 'Шесть',
            7 => 'Семь',
            8 => 'Восемь',
            9 => 'Девять',
            default => 'Incorrect value',
        };
        return $Srt_Interpretation_Of_Number;
      } 
      echo Translator(1)."<br>";
      echo Translator(9)."<br>";
      echo Translator(52)."<br>";
    ?>
</body>
</html>