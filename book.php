<?php
include __DIR__."/views/header.php";
include __DIR__."/model/Book.php";
$books = Book::fetchAll(); 
?>

    <section class="container">
        <h2>Books</h2>

        <div class="row">
            <?php foreach($books as $book) {
                $book->printBooks();
            } ?>
            
        </div>

    </section>




