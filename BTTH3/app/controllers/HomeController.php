<?php
include_once "{$_SERVER['DOCUMENT_ROOT']}\BTTH3\app\services\BookService.php";
include_once "{$_SERVER['DOCUMENT_ROOT']}\BTTH3\app\services\AuthorService.php";

class HomeController {
    public function index() {
        $bookService = new BookService();
        $books = $bookService->getAllBook();
        include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH3/app/views/Home/index.php";
    }
}