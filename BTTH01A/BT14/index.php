<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1A</title>
</head>
<body>
    <?php
        $array1 = [
            [77, 87],
            [23, 45]
           ];
           $array2 = [
            'giá trị 1', 'giá trị 2'
           ];
           
           $result = array_map(function($a, $b) {
               return array_merge([$b], $a);
           }, $array1, $array2);
           
           print_r($result);
    ?>
</body>
</html>