<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function exercise</title>
</head>
<body>
    
    <?php
    //function is print the max number in array
    $regularArray = [4, 5, 6, 7, 3, 2, 1];
    function maxNumber($array){
        $max = $array[0];
        for ($i = 1; $i < count($array); $i++) {
            
            if ($array[$i] > $max){
                $max = $array[$i];
            }
        }
        return $max;
    };
    echo maxNumber($regularArray);
    ?>

</body>
</html>