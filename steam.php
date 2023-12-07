<?php 
include __DIR__ ."/views/header.php";
include __DIR__ ."/model/Steam.php";
$steam = Steam::fetchAll();
?>


<section>
    <h2>Steam</h2>

    <div class="row">
        <?php foreach ($steam as $pippo){
            $pippo->printSteam();
        } ?>
    </div>
</section>