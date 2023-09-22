<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH01A</title>
</head>
<body>
    <?php
        function tinhtong($arrs){
            return array_sum($arrs);
        }

        function tinhtich($arrs){
            $tich = 1;
            foreach($arrs as $num){
                $tich *= $num;
            }
            return $tich;
        }

        function tinhhieu($arrs){
            $hieu = $arrs[0];
            for($i=1;$i<count($arrs);$i++){
                $hieu -= $arrs[$i];
            }
            return $hieu;
        }

        function tinhthuong($arrs){
            $thuong = $arrs[0];
            for($i=1;$i<count($arrs);$i++){
                $thuong /= $arrs[$i];
            }
            return $thuong;
        }

        $arrs = [2,5,6,9,2,5,6,12,5];
        echo "Tổng các phần tử      = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = ".tinhtong($arrs).'<br>'.'<br>';
        echo "Tích các phần tử      = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = ".tinhtich($arrs).'<br>'.'<br>';
        echo "Hiệu các phần tử      = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = ".tinhhieu($arrs).'<br>'.'<br>';
        echo "Thương các phần tử      = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = ".tinhthuong($arrs).'<br>'.'<br>';
    ?>
</body>
</html>