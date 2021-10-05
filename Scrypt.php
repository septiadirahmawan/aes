<?php
/**
   * aes-crypt -- A Simple AES Crypt
   * @version 0.1
   * @author Septiadi Rahmawan <septiadirahmawan@gmail.com>
   * @link https://github.com/septiadirahmawan/aes-crypt/
   * @copyright Copyright 2021 Septiadi Rahmawan
   * @license http://www.opensource.org/licenses/mit-license.php MIT License
   * @package aes-crypt
   */

if (!class_exists('Scrypt')) {
    class Scrypt {
        const ENCRYPT_METHOD = "AES-256-CBC";
        public static function encrypt($string, $secret_key) {
            $permitted_chars    = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $iv                 = substr(str_shuffle($permitted_chars), 0, 16);
            $output             = openssl_encrypt($string, self::ENCRYPT_METHOD, $secret_key, 0, $iv);
            $iv_encoded         = base64_encode($iv);
            $output_fin         = $output.".".$iv_encoded;

            return $output_fin;
        }

        public static function decrypt($string, $secret_key) {
            $payload_arr        = explode(".", $string);

            if(count($payload_arr) != 2)
                return "error format";

            $payload            = $payload_arr[0];
            $iv_encoded         = $payload_arr[1];
            $iv                 = base64_decode($iv_encoded);
            $output             = openssl_decrypt($payload, self::ENCRYPT_METHOD, $secret_key, 0, $iv);

            if(false === $output)
                return "error decrypt false";

            return $output;
        }
    }
}