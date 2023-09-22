<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1A</title>
</head>
<body>
    <?php
        function convert_to_lowercase($arr) {
            return array_map(function($item) 
            {
                if (is_string($item)) 
                {
                    return strtolower($item);
                } else {
                    return $item;
                }
            }, $arr);
        }       

        // Áp dụng hàm với mảng [‘a’, ‘b’, ‘ABC’]
        $arr1 = ['a', 'b', 'ABC'];
        $result1 = convert_to_lowercase($arr1);
        print_r($result1);

        // Áp dụng hàm với mảng [‘1’, ‘B, ‘C’, ‘E’]
        $arr2 = ['1', 'B', 'C', 'E'];
        $result2 = convert_to_lowercase($arr2);
        print_r($result2);

        // Áp dụng hàm với mảng [‘a’, 0, null, false]
        $arr3 = ['a', 0, null, false];
        $result3 = convert_to_lowercase($arr3);
        print_r($result3);
    ?>
</body>
</html>