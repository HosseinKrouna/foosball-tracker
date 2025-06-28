<?php

function get_all_players() {
    $filename = CONFIG['filename'];
    $json = '';

    if(!file_exists($filename)) {
        file_put_contents($filename, '');
    }else{
        $handler = fopen($filename, "r");
        $json = fread($handler, filesize($filename));
        fclose($handler);
        $json = file_get_contents($filename);
    
    }

    return json_decode($json);
}


function get_player($player) {
$all_players = get_all_players();

foreach($all_players as $list_item) {
    if($list_item -> player === $player) {
        return $list_item;
    }
}
return false;
}

function search_players($search) {
    $all_players = get_all_players();

    $result = array_filter($all_players, function($item) use($search){
   return 
   stripos($item->player, $search) !== false ||
   stripos($item->wins, $search) !== false ||
   stripos($item->defeats, $search) !== false ;
});
return $result;
}