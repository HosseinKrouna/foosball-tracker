<?php
require('app/app.php');


$search_player = validate_get('search_player');

if($search_player) {
    $list_data = search_players($search_player);
}else{
    $list_data = get_all_players();
}


$view_data = [
    'title' => "Rangliste",
    'players_list' => $list_data,
    'search_value' => $search_player
];



view('index', $view_data);