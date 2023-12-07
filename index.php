<?php
include __DIR__."/views/header.php";
include __DIR__."/model/movie.php";
?>

    <section class="container">
        <h2>Movie</h2>

        <div class="row">
            <?php foreach($movies as $movie) {
                $movie->printCard();
            } ?>
        </div>

    </section>

    <?php
    include __DIR__."/structure/footer.php";
    ?>


