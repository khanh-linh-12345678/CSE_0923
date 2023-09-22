<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1A</title>
</head>
<body>
    <?php
        $a = ['a' => ['b' => 0, 'c' => 1], 'b' => ['e' => 2, 'o' => ['b' => 3]]];
        
        // Lấy giá trị có key 'b' từ mảng
        $valueB = $a['b']['o']['b'];
        
        echo "Giá trị có key 'b' là: " . $valueB . "<br>";
        
        // Lấy giá trị có key 'c' từ mảng
        $valueC = $a['a']['c'];
        
        echo "Giá trị có key 'c' là: " . $valueC . "<br>";
        
        // Lấy thông tin của phần tử có key 'a'
        $infoA = $a['a'];
        
        echo "Thông tin của phần tử có key 'a':<pre>";
        print_r($infoA);
        echo "</pre>";

        
    ?>
</body>
</html>