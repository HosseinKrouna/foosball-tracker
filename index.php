<?php
require('app/app.php');

$list_data = get_all_games();


$view_data = [
    'title' => 'Rangliste',
    'players_list' => $list_data
];



view('index', $view_data);