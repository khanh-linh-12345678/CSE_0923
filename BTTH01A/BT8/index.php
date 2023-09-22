<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1A</title>
</head>
<body>
    <?php
        $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

        $min_length = strlen($array[0]);
        $max_length = strlen($array[0]);
        $min_string = $array[0];
        $max_string = $array[0];
        
        foreach ($array as $string) {
            $length = strlen($string);
            if ($length < $min_length) {
                $min_length = $length;
                $min_string = $string;
            }
            if ($length > $max_length) {
                $max_length = $length;
                $max_string = $string;
            }
        }
        
        echo "Chuỗi lớn nhất là $max_string, độ dài = $max_length <br>";
        echo "Chuỗi nhỏ nhất là $min_string, độ dài = $min_length";
    ?>
</body>
</html>