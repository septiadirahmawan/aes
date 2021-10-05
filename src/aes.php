<?php 

use Septiadirahmawan\Aes;

if (!function_exists('encrypt')) {
    function encrypt($string, $key) {
        return Aes::encrypt($string, $key);
    }
}

if (!function_exists('decrypt')) {
    function decrypt($string, $key) {
        return Aes::decrypt($string, $key);
    }
}