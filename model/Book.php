<?php

class Book
{
    public $id;
    public $title;
    
    public $longDescription;

    public $thumbnailUrl;

    public $price;
    public $quantity;

    function __construct($id, $title, $longDescription, $thumbnailUrl, $price, $quantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->longDescription = $longDescription;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function printBooks()
    {
        $image = $this->thumbnailUrl;
        $title = $this->title;
        $custom = '';
        $content = $this->longDescription;
        $price = $this->price;
        $quantity = $this->quantity;
        

        include __DIR__ . '/../views/card.php';
    }

    public static function fetchAll()
    {
        $bookString = file_get_contents(__DIR__ . '/books_db.json');
        $bookList = json_decode($bookString, true);

        $books = [];
        foreach ($bookList as $book) {

            $books[] = new Book($book['_id'], $book['title'],  $book['longDescription'], $book['thumbnailUrl'], $book['price'], $book['quantity']);
            
        }
        return $books;
    }
}




?>