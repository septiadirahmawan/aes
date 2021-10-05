<?php

include '../Scrypt.php';

$secret_key = "rahasia";

echo Scrypt::encrypt("data", $secret_key);
echo "<br>";
echo Scrypt::decrypt("X+qpswtOhhTS4eAMVg08Sg==.enhoSlJVdXRleVpURHBpZw==", $secret_key);
?>