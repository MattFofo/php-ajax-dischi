<?php
// include './db.php' ?>

<main>
   <div class="container-fluid">
      <div class="row justify-content-center">
         <?php foreach ($response['arr_dischi'] as $disco) { ?>
            <div class="card-disco col-4 col-sm-4 col-md-3 col-lg-2 bg-secondary m-3 p-4">
               <img class="img-fluid" src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>">
               <h3 class="text-center py-2"><?= $disco['title'] ?></h3>
               <h4 class="text-center"><?= $disco['author'] ?></h4>
               <h4 class="text-center"><?= $disco['year'] ?></h4>
            </div>
         <?php } ?>
      </div>
   </div>
</main>