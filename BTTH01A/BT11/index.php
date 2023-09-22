<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1A</title>
</head>
<body>
    <?php
        $array = array(1, 2, 3, 4, 5);

        // Xóa phần tử thứ 3 trong mảng
        unset($array[2]);
        
        // Đánh lại key của mảng
        $array = array_values($array);
        
        // Hiển thị kết quả
        print_r($array);
    ?>
</body>
</html>