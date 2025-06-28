<?php

function get_all_games() {
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