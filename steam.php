<?php 
include __DIR__ ."/views/header.php";
include __DIR__ ."/model/Steam.php";
$steam = Steam::fetchAll();
?>


<section>
    <h2>STEAM</h2>

    <div class="row">
        <?php foreach ($steam as $steam){
            $steam->printSteam();
        } ?>
    </div>
</section>