<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH3/app/models/Author.php";
class AuthorService
{
    public function getAllAuthor (){
        try{
            //bước 1: knoi
            $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien','root','');

            //buowc2: truy vấn
            $sql = "select * from tacgia order by id desc";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        
            //bước 3: xử lý kết quả
            $authors=[];
           
            while ($row = $stmt->fetch()) 
            {
               $authors[] = new Author($row['id'],$row['tenTacGia']); 
            }
            return $authors;
        }catch(Exception $e)
        {
            // die("lỗi ở đây");
            return $authors=[];
        }
    }
}