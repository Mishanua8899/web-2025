<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function mul(array $array): int
    {
        $result = $array[0];
        if (count($array) == 1) {
            return $array[0];
        } else {
            for ($i = 0; $i < count($array); $i++) {
                if ($i == 0) {
                    continue;
                }
                $result = $result * $array[$i];
            };
            return $result;
        }
    };

    function diff(array $array): int
    {
        $result = $array[0];
        if (count($array) == 1) {
            return -$array[0];
        } else {
            for ($i = 0; $i < count($array); $i++) {
                if ($i == 0) {
                    continue;
                }
                $result = $result - $array[$i];
            };
            return $result;
        }
    };

    function PolishNotation(string $math_expression)
    {
        $arr_of_math_expression = explode(' ', $math_expression);
        $num_buff = [];
        $stack = [];
        $result_of_math_expression = 0;
        for ($i = 0; $i < count($arr_of_math_expression); $i++) {
            if ($arr_of_math_expression[$i] != '+' && $arr_of_math_expression[$i] != '-' && $arr_of_math_expression[$i] != '*') {
                array_push($num_buff, intval($arr_of_math_expression[$i]));
            } else {
                switch ($arr_of_math_expression[$i]) {
                    case '+':
                        if (!is_numeric($arr_of_math_expression[$i - 1])) {
                            $result_of_math_expression = array_sum($stack);
                            $stack = [];
                            array_push($stack, $result_of_math_expression);
                        } else if (count($num_buff) == 1) {
                            array_push($stack, $num_buff[0]);
                            $result_of_math_expression = array_sum($stack);
                            $stack = [];
                            array_push($stack, $result_of_math_expression);
                        } else {
                            array_push($stack, array_sum($num_buff));
                            $num_buff = [];
                        }
                        break;
                    case '-':
                        if (!is_numeric($arr_of_math_expression[$i - 1])) {
                            $result_of_math_expression = diff($stack);
                            $stack = [];
                            array_push($stack, $result_of_math_expression);
                        } else if (count($num_buff) == 1) {
                            array_push($stack, $num_buff[0]);
                            $result_of_math_expression = diff($stack);
                            $stack = [];
                            array_push($stack, $result_of_math_expression);
                        } else {
                            array_push($stack, diff($num_buff));
                            $num_buff = [];
                        }
                        break;
                    case '*':
                        if (!is_numeric($arr_of_math_expression[$i - 1])) {
                            $result_of_math_expression = mul($stack);
                            $stack = [];
                            array_push($stack, $result_of_math_expression);
                        } else if (count($num_buff) == 1) {
                            array_push($stack, $num_buff[0]);
                            $result_of_math_expression = mul($stack);
                            $stack = [];
                            array_push($stack, $result_of_math_expression);
                        } else {
                            array_push($stack, mul($num_buff));
                            $num_buff = [];
                        }
                        break;
                }
            }
        }
        return $stack[0];
    };
    echo PolishNotation('8 9 + 1 7 - *');
    ?>
</body>

</html>