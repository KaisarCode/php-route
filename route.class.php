<?php
namespace KC;

// Router
Class Route {
    public function __construct($mth, $pth, $cb) {
        $mth = trim($mth);
        $mth = strtoupper($mth);
        $mthd = $_SERVER['REQUEST_METHOD'];
        if ($mth == $mthd || $mth == 'ALL') {
            $path = $_SERVER['REQUEST_URI'];
            $path = parse_url($path, PHP_URL_PATH);
            $path = '/'.trim($path, '/');
            $patt = str_replace('/', '\\/', $pth);
            preg_match_all("/^$patt$/", $path, $mtch)
            && $cb($mtch);
        }
    }
}
