<?php

$source_url = __DIR__ . '/../server/data.json';

$data_json = file_get_contents($source_url);

$discs = json_decode($data_json, true);



$genre_filter = $_GET['genre'] ?? '';

// if (!empty($genre_filter)) {
//     $filtered_discs = [];

//     foreach ($discs as $disc) {
//         $genre = $disc['genre'];
//         if ($genre === $genre_filter) $filtered_discs[] = $disc;
//     }

//     $discs = $filtered_discs;
// }
// if (!empty($genre_filter)) {
//     $filter = $genre_filter;
//     return $filter;
// }



header('Content-Type: application/json');
echo json_encode($discs);
