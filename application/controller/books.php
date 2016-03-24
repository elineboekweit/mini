<?php


class Books extends Controller
{
   
    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/books/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
