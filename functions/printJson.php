<?php

//  funzione per stampare in Json array
function printJson($arrayDiscs) {
    // Json e no html/text
    header('Content-Type: application/json');
    echo json_encode($arrayDiscs);
}

?>