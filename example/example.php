<?php

require '../vendor/autoload.php';

use Septiadi\Aes;

$secret_key = "rahasia";

echo Aes::encrypt("data", $secret_key);
echo "<br><br>";
echo Aes::decrypt("X+qpswtOhhTS4eAMVg08Sg==.enhoSlJVdXRleVpURHBpZw==", $secret_key);
?>