<?php
function print_head() {
    include "{$_SERVER['DOCUMENT_ROOT']}/views/head.php";
}

function print_header() {
    include "{$_SERVER['DOCUMENT_ROOT']}/views/header.php";
}
function print_footer() {
    include "{$_SERVER['DOCUMENT_ROOT']}/views/footer.php";
}
function debug($variable){
    echo '<pre>' . print_r($variable, true) . '</pre>';
}