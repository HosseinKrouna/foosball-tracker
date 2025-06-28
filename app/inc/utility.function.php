<?php
function view($template, $data = []) {
    require("./views/layout.view.php");
}

function redirect($url) {
    header("Location: $url");
    die();
}