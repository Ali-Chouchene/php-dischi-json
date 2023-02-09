<?php

$source_url = __DIR__ . '/../server/data.json';

$data_json = file_get_contents($source_url);

$arr = json_decode($data_json, true);

$genre_filter = $_GET['genre'] ?? '';

if (!empty($genre_filter)) {
    $filtered_discs = [];

    foreach ($discs as $disc) {
        $genre = $disc['genre'];
        if ($genre === $genre_filter) $filtered_discs[] = $disc;
    }

    $discs = $filtered_discs;
} else {
    $discs = $arr;
}



header('Content-Type: application/json');
echo json_encode($discs);
