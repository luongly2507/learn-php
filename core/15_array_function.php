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
    $regularArray = ["a", 2, 1, 4, 5, 6, "ab"];
    
    echo max($regularArray)."\n";
    echo min($regularArray)."<br>";
    sort($regularArray);
    print_r($regularArray);
    ?>
</body>
</html>