<?php

include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH3/app/models/Book.php";
class BookService
{
    public function getAllBook (){
        try{
            //bước 1: knoi
            $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien','root','');
    
            //buowc2: truy vấn
            $sql = "select * from sach order by id desc";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        
            //bước 3: xử lý kết quả
            $books=[];
           
            while ($row = $stmt->fetch()) 
            {
               $books[] = new Book($row['id'],$row['tenSach'],$row['namXuatBan'],$row['idTacGia']); 
            }
            return $books;
        }catch(Exception $e)
        {
            // die("lỗi ở đây");
            return $books=[];
        }
    }
}