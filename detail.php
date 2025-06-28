<?php
require('app/app.php');



$player = filter_input(INPUT_GET, 'player', FILTER_VALIDATE_REGEXP,
 ['options' => ['regexp' => '/^[\w\s\-\'\:]+$/']]);


if($player) {
$one_player = get_player($player);
}else{
    //TODO: 404
}


$view_data = [
    'title' => 'Detailansicht',
    'player' => $one_player
];

view('detail', $view_data);