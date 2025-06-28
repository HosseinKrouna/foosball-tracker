<?php
function view($template, $data = []) {
    require(APP_PATH . "views/layout.view.php");
}

function redirect($url) {
    header("Location: $url");
    die();
}

function validate_get($value) {
return filter_input(INPUT_GET, $value, FILTER_VALIDATE_REGEXP,
 ['options' => ['regexp' => '/^[\w\s\-\'\:]+$/']]);
}