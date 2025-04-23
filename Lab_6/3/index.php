<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       function ZodiakSign(string $date) {
            $arr = explode('.', $date);
            $day = intval($arr[0]);
            $month = intval($arr[1]);
            if(($month == 3 && $day >= 21) || ($month == 4 && $day >= 20)) {
                return 'Овен';
            } else if(($month == 4 && $day >= 21) || ($month == 5 && $day <= 21)) {
                return 'Телец';
            } else if(($month == 5 && $day >= 22) || ($month == 6 && $day <= 21)) {
                return 'Близнецы';
            } else if(($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
                return 'Рак';
            } else if(($month == 7 && $day >= 23) || ($month == 8 && $day <= 21)) {
                return 'Лев';
            } else if(($month == 8 && $day >= 22) || ($month == 9 && $day <= 23)) {
                return 'Дева';
            } else if(($month == 9 && $day >= 24) || ($month == 10 && $day <= 23)) {
                return 'Весы';
            } else if(($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)) {
                return 'Скорпион';
            } else if(($month == 11 && $day >= 23) || ($month == 12 && $day <= 22)) {
                return 'Стрелец';
            } else if(($month == 12 && $day >= 23) || ($month == 1 && $day <= 20)) {
                return 'Козерог';
            } else if(($month == 1 && $day >= 21) || ($month == 2 && $day <= 19)) {
                return 'Водолей';
            } else if(($month == 2 && $day >= 20) || ($month == 3 && $day <= 20)) {
                return 'Рыбы';
            }
        };
        echo ZodiakSign('01.09.2007') . '<br>';
        echo ZodiakSign('21.02.2007') . '<br>';
        echo ZodiakSign('23.07.2007') . '<br>';
        echo ZodiakSign('20.04.2007') . '<br>'

    ?>
</body>
</html>