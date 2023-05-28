<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statement</title>
</head>
<body>
    <?php
        $number1 = 1;
        $number2 = 2;
        $number3 = 3;

        $max;
        if (($number1 > $number2) && ($number1 > $number3)){
            $max = $number1;
        } else if ($number2 < $number3){
            $max = $number3;
        } else {
            $max = $number2;
        }
        echo $max;
    ?>
</body>
</html>