<?php

use Septiadirahmawan\Scrypt;

if (!function_exists('encrypt')) {
    function encrypt($string, $key) {
        return Scrypt::encrypt($string, $key);
    }
}

if (!function_exists('decrypt')) {
    function decrypt($string, $key) {
        return Scrypt::decrypt($string, $key);
    }
}