<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope</title>
</head>
<body>
    <?php 
    $scope = "Outsite"; //Global scope
    function local($scope){
        return $scope = "Insite"; //Local scope
    }
    echo $scope."<br />";
    echo local($scope)."<br />";
    echo $scope."<br />";
    function setScope($scope){ //pass by value
        return $scope = "Insite"; 
    }
    function referenceScope(&$scope){ //pass by reference
        return $scope = "Insite"; 
    }
    echo setScope($scope)."<br />";
    echo $scope."<br />";
    echo referenceScope($scope)."<br />";
    echo $scope."<br />";
    ?>
</body>
</html>