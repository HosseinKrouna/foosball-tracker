<?php
require('app/app.php');



$player = validate_get('player');


if(!$player) {
    redirect("index.php");
}

$one_player = get_player($player);

if(!$one_player) {
    view('404');
    die();
}

$view_data = [
    'title' => "Detailansicht",
    'player' => $one_player
];

view('detail', $view_data);