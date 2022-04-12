<?php 

   include './partials/db.php'; 

   header('Content-Type: Application/json');

   echo json_encode($response);

?>