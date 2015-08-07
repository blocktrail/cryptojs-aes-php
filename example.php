<?php

use Blocktrail\CryptoJSAES\CryptoJSAES;

$passphrase = "my passphrase";
$text = "example value";

$encrypted = CryptoJSAES::encrypt($text, $passphrase);
var_dump("Encrypted: ", $encrypted);

$decrypted = CryptoJSAES::decrypt($encrypted, $passphrase);
var_dump("Decrypted: ", $decrypted);
