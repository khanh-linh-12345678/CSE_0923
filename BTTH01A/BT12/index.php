<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1A</title>
</head>
<body>
    <?php
        $numbers = [
            'key1' => 12,
            'key2' => 30,
            'key3' => 4,
            'key4' => -123,
            'key5' => 1234,
            'key6' => -12565,
           ];
           
           // Lấy ra phần tử đầu tiên và phần tử cuối cùng trong mảng
           $first_element = reset($numbers);
           $last_element = end($numbers);
           echo "Phần tử đầu tiên trong mảng là = " . $first_element . "\n";
           echo "Phần tử cuối cùng trong mảng là = " . $last_element . "\n";
           
           // Tìm số lớn nhất, số nhỏ nhất và tổng các giá trị trong mảng
           $max = max($numbers);
           $min = min($numbers);
           $sum = array_sum($numbers);
           echo "Số lớn nhất trong mảng là: " . $max . "\n";
           echo "Số nhỏ nhất trong mảng là: " . $min . "\n";
           echo "Tổng các giá trị trong mảng là: " . $sum . "\n";
           
           // Sắp xếp mảng theo chiều tăng và giảm các giá trị
           sort($numbers);
           print_r($numbers);
           rsort($numbers);
           print_r($numbers);
           
           // Sắp xếp mảng theo chiều tăng và giảm các key
           ksort($numbers);
           print_r($numbers);
           krsort($numbers);
           print_r($numbers);
    ?>
</body>
</html>