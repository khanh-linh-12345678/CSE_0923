
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
 
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý thư viện</h3>
        <div>
            <ul class="nav">
                <li class="nav-item">
                <a class="nav-link mb-2" href="<?php $_SERVER['DOCUMENT_ROOT']?>/BTTH3/app/views/Home/index.php" >Sách</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-2" href="#">Tác Giả</a>
                </li>
            </ul>
        </div>
        
        <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/BTTH3/app/views/Admin/addBook.php" class="btn btn-success">Thêm mới</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Mã tác giả</th>
                <th scope="col">Tên tác giả</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            <tr>
            <?php
                foreach ($authors as $author) {
            ?>
                    <tr>
                        <th scope="row"><?= $author->getId()?></th>
                        <td><?= $author->getTenTacGia()?></td>
                        <td>
                            <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/BTTH3/app/views/Admin/editAuthor.php?id=<?= $author->getId()?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="#"><i class="fa-solid fa-trash-can"></i></a>
                        </td>                 
                    </tr>
            <?php  }?>

                <!-- <th scope="row">0</th>
                <td>Cây cam</td>
                <td>2000</td>
                <td>Linh</td>
                <td> -->

                
            </tbody>
        </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>