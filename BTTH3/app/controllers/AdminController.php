<?php

class AdminController{
    // public function __call($name, $arguments) {
    //     echo "funtion {$name} không tồn tại, hãy check lại trong đối tượng ". get_class($this);
    // }
    public function editBook(){
        //xử lí dữ liệu được post lên từ form để editing.
        echo "đã xử lí";
        header("location:http://localhost:3000/BTTH3/public/index.php");
    }

    public function addBook(){
        //xử lí dữ liệu được post lên từ form để adding.
        echo "đã xử lí";
        header("location:http://localhost:3000/BTTH3/public/index.php");
    }
    // public function listAuthor(){
    //     //xử lí dữ liệu được post lên từ form để list.
    //     echo "đã xử lí";
    //     header("location:http://localhost:3000/exam2/public/index.php");
    // }

    public function indexAuthor() {
        // Đoạn mã để điều hướng đến trang Author
        header("Location:http://localhost:3000/BTTH3\app\views\Home\indexAuthor.php");
        exit(); // Đảm bảo kết thúc chương trình sau khi điều hướng
    }
}