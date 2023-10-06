<?php

class Book
{
    //properties
    private $id;
    private $tenSach;
    private $namXuatBan;
    private $idTacGia;

    //methods
    public function __construct($id, $tenSach, $namXuatBan, $idTacGia)
    {
        $this->id = $id;
        $this->tenSach= $tenSach;
        $this->namXuatBan = $namXuatBan;
        $this->idTacGia = $idTacGia;
    }
    //getter and setter

    public function getId()
    {
        return $this->id;
    }

    public function getTenSach()
    {
        return $this->tenSach;
    }
    public function getNamXuatBan()
    {
        return $this->namXuatBan;
    }
    public function getIdTacGia()
    {
        return $this->idTacGia;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setTenSach($tenSach)
    {
        $this->tenSach = $tenSach;
    }

    public function setNamXuatBan($namXuatBan)
    {
        $this->namXuatBan = $namXuatBan;
    }

    public function setIdTacGiai($idTacGia)
    {
        $this->idTacGia = $idTacGia;
    }
    

}
?>