<?php 
    // Prendo il file Json
    $toDoList = file_get_contents('toDoList.json');
    
    // Specifico che è un file json
    header('content-type: application/json');

    json_encode($toDoList);
    
?>