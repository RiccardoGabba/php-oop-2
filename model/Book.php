<?php

class Book
{
    public $id;
    public $title;
    
    public $longDescription;

    public $thumbnailUrl;


    function __construct($id, $title, $longDescription, $thumbnailUrl)
    {
        $this->id = $id;
        $this->title = $title;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->longDescription = $longDescription;
    }

    public function printBooks()
    {
        $image = $this->thumbnailUrl;
        $title = $this->title;
        $custom = '';
        $content = $this->longDescription;
        

        include __DIR__ . '/../views/card.php';
    }

    public static function fetchAll()
    {
        $bookString = file_get_contents(__DIR__ . '/books_db.json');
        $bookList = json_decode($bookString, true);

        $books = [];
        foreach ($bookList as $book) {

            $books[] = new Book($book['_id'], $book['title'],  $book['longDescription'], $book['thumbnailUrl'],);
            
        }
        return $books;
    }
}




?>