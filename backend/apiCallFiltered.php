
<?php

require_once __DIR__ . "/../database/discDb.php";

$genre = $_GET["genre"];

$filteredDiscs = array_filter($discs, function($disco) use ($genre) {
    return $disco['genre'] === $genre;
});

header('Content-Type: application/json');
echo json_encode($filteredDiscs);