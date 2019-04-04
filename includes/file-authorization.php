<?php


function add_custom_upload_mimes($mimes) {
    $mimes['ttf'] = 'application/x-font-ttf';
    $mimes['otf'] = 'application/font-sfnt';
    return $mimes;
}

add_filter('upload_mimes', 'add_custom_upload_mimes');