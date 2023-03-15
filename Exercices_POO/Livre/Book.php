<?php

class Book
{
    private static $uniqueBook = null;
    private $title;

    private function __construct(){

    }

    static public function getInstance()
    {
        if (self::$uniqueBook == null) {
            self::$uniqueBook = new Book();
        }
        return self::$uniqueBook;
    }

    public function printTitle(){
        echo $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }
}

$book1 = Book::getInstance();
$book1->setTitle("Harry");
$book1->afficherNom();

$book2 = Book::getInstance();
$book2->setTitle("lol");
$book2->printTitle();

$book1->printTitle();