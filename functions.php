<?php

require_once 'config.php';

function get_events() {
    global $db;
    $allEvents = mysqli_query($db, "SELECT * FROM events");
    return mysqli_fetch_all($allEvents, MYSQLI_ASSOC);
}

function get_json($arr) {
    $data = '[';
    foreach($arr as $item) {
        $data .= '{ "date": "' . $item['date'] . '", "title": "' . $item['title'] . '", "description": "' . $item['description'] . '", "url": "?id=' . $item['id'] . '" },';
    }
    $data .= ']';
    return $data;
}


function print_arr($arr) {
    echo "<pre>" . print_r($arr, true) . "</pre>";
}