<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
</head>
<body>
    <?php
    $season = 5;
    switch ($season) {
        case 1: 
            echo "spring";
            break;
        case 2: 
            echo "summer";
            break;
        case 3: 
            echo "autumn";
            break;
        default:
            echo "winter";
        };
    ?>
</body>
</html>