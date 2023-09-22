<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH1A</title>
</head>
<body>
    <?php
        $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
        foreach ($array as $key):
            if ($key%5==0)
            {
                echo "$key ";
            }
        endforeach;
    ?>
</body>
</html>