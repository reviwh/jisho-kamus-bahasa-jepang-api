<?php

header("Access-Control-Allow-Origin: header");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$data = json_decode(file_get_contents(__DIR__ . '/data.json'), true);

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $data = array_filter($data, function ($value) use ($keyword) {
        $japanese = $value['japanese'][0];
        $senses = $value['senses'][0];
        return isset($value['slug']) &&
            (strpos($value['slug'], $keyword) !== false ||
                (isset($japanese['reading']) && strpos($japanese['reading'], $keyword) !== false) ||
                (isset($senses['english_definitions'][0]) && strpos($senses['english_definitions'][0], $keyword) !== false));
    });
    $data = array_values($data);
}


echo json_encode($data);

