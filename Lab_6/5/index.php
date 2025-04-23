<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function LuckyTicket(int $StartNum, int $EndNum)
    {
        $result_arr = [];
        for ($i = $StartNum; $i < $EndNum; $i++) {
            $Number = strval($i);
            $Array_Of_Digits = str_split($Number);
            $FirstHalf = (int)$Array_Of_Digits[0] + (int)$Array_Of_Digits[1] + (int)$Array_Of_Digits[2];
            $SecondHalf = (int)$Array_Of_Digits[3] + (int)$Array_Of_Digits[4] + (int)$Array_Of_Digits[5];
            if ($FirstHalf == $SecondHalf) {
                $result_arr[] = $i;
            }
        }
        return $result_arr;
    }
    $array = LuckyTicket(132401, 132601);
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . '<br>';
    }
    print_r($array);
    ?>
</body>

</html>