🍴 Forked from [laravel/legacy-encrpyter](https://github.com/laravel/legacy-encrypter) for more Laravel version compatibility. The original repository only supports Laravel `5.3.*`

| Laravel Version | Package Version | Installation |
| --- | --- | --- |
| 5.3.* | 5.3.* | `composer require irman/legacy-encrypter:^5.3.0` |
| 5.4.* | 5.4.* | `composer require irman/legacy-encrypter:^5.4.0` |
| 5.5.* | 5.5.* | `composer require irman/legacy-encrypter:^5.5.0` |
| 5.6.* | 5.6.* | `composer require irman/legacy-encrypter:^5.6.0` |
| 5.7.* | 5.7.* | `composer require irman/legacy-encrypter:^5.7.0` |
| 5.8.* | 5.8.* | `composer require irman/legacy-encrypter:^5.8.0` |
| 6.* | 6.* | `composer require irman/legacy-encrypter:^6.0` |
| 7.* | 7.* | `composer require irman/legacy-encrypter:^7.0` |

---

# Laravel Legacy Encrypter

This encryption package provides support for the legacy Mcrypt encrypter used by Laravel 5.0 through 5.2. It is primarily intended to be used to migrate your data to the new OpenSSL based encrypter used in 5.1 through the latest release of Laravel.

#### Usage Example

```php
use Irman\LegacyEncrypter\McryptEncrypter;

$encrypter = new McryptEncrypter($encryptionKey);

$encrypted = $encrypter->encrypt('I am encrypted!');

$decrypted = $encrypter->decrypt($encrypted);
```
