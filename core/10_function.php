<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
    // Factorial function of a number
    function factural($number){
        $result = 1;
        for ($i = 1; $i<= $number; $i++){
            $result = $result * $i;
        }
        return $result;
    }
    echo factural(5);
    ?>
</body>
</html>