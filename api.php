<?php 

   include_once __DIR__ . '/partials/db.php'; 

   header('Content-Type: Application/json', 'Access-Control-Allow-Origin : http://localhost//php-ajax-dischi/Milestone2/index.html');
   // header('Access-Control-Allow-Origin : *');
   echo json_encode($response);


?>