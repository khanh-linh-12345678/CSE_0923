<?php
class Author
{
    //properties
    private $id;
    private $tenTacGia;

    //methods
    public function __construct( $id, $tenTacGia)
    {
        $this->id = $id;
        $this->tenTacGia = $tenTacGia;
    }

    //gettes and settes
    public function getId()
    {
        return $this->id;
    }

    public function getTenTacGia()
    {
        return $this->tenTacGia;
    }

}