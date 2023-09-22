<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH</title>
</head>
<body>
    <?php
        $arrs = ['PHP','HTML','CSS','JS'];
    ?>
    <table >
        <thead >
            <tr><th style="font-weight: bolder;border: 1px solid black; ">Tên khóa học</th></tr>
        </thead>
        <tbody>
            <?php foreach($arrs as $value): 
                echo "<tr>";
                echo "<td style='border: 1px solid black;'>".$value."<td>";
                echo "</tr>";
            ?>
        </tbody>
        <?php endforeach;?>
    </table>

</body>
</html>