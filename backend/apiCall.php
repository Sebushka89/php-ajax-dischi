<?php

// ho bisogno dell'array dal db
require_once __DIR__ . "/../database/discsDb.php";

// ho bisogno funzione che mi scrive l'array in json
require_once __DIR__ . "/../functions/printJson.php";

printJson($discs);

/*
potevo scrivere anche cosi senza funzione
    
    header('Content-Type: application/json');
    echo json_encode($array);
*/


?>