<?php
// Set route
function setRoute($mth, $pth, $cb) {
    $mthd = $_SERVER['REQUEST_METHOD'];
    $mthd = strtoupper($mthd);
    $mthd = trim($mthd);
    if ($mth == $mthd || $mth == 'all') {
        $path = $_SERVER['REQUEST_URI'];
        $path = parse_url($path, PHP_URL_PATH);
        $path = '/'.trim($path, '/');
        $patt = str_replace('/', '\\/', $pth);
        preg_match_all("/^$patt$/", $path, $mtch)
        && $cb($mtch);
    }
}
