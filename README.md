CryptoJS AES PHP
================
This is a **tiny** package to make it a little bit easier to encrypt and decrypt in a manner compatible with `CryptoJS`.

Crypto
------
 - Cypher: AES-256
 - Mode: cbc
 - Key Derivation: evpkdf (OpenSSL custom, MD5, 1 iteration)

Installation
------------
You will need to be using [Composer](http://getcomposer.org/) in your project.
If you aren't using Composer yet, it's really simple! Here's how to install composer and this package:

```
# Install Composer
curl -sS https://getcomposer.org/installer | php

# Add the BlockTrail SDK as a dependency
php composer.phar require blocktrail/cryptojs-aes-php
``` 

Next, require Composer's autoloader, in your application, to automatically load required packages in your project:
```PHP
require 'vendor/autoload.php';
use Blocktrail\CryptoJSAES\CryptoJSAES;
```

Or if put the following in your `composer.json`:
```
"blocktrail/cryptojs-aes-php": "~0.1.0"
```

Usage
-----
```php
use Blocktrail\CryptoJSAES\CryptoJSAES;

$passphrase = "my passphrase";
$text = "example value";

$encrypted = CryptoJSAES::encrypt($text, $passphrase);
var_dump("Encrypted: ", $encrypted);

$decrypted = CryptoJSAES::decrypt($encrypted, $passphrase);
var_dump("Decrypted: ", $decrypted);

```
