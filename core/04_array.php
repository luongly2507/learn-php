<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    $regularArray = [1, 2, 3, 4, 5, 6, 7];
    $associativeArray = [0 => 1,
                        1 => 2,
                        2 => 3,
                        3 => 4,
                        4 => 5, 
                        5 => 6,
                        6 => 7];
    echo $associativeArray[6];
    echo "<br/>";
    print_r($associativeArray);
    
    ?>
</body>
</html>