<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function GetIsLeapYear(int $year)
    {
        if ($year > 30000 || $year < 0) {
            return "Incorrect value";
        } else if ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0)) {
            return 'YES';
        } else {
            return 'NO';
        }
    }
    echo GetIsLeapYear(2000) . "<br>";
    echo GetIsLeapYear(2007) . "<br>";
    echo GetIsLeapYear(30293) . "<br>"

    ?>
</body>

</html>