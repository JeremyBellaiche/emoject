![WebLAgence](https://weblagence.com/images/logo.png)

### Emoject

Emoject allows you to insert any Apple emoji image (png) and therefore visible on any desktop (Mac, Windows, Linux ...).

## Installation

This package requires the use of composer.

```shell
composer require weblagence/emoject
```

Please execute this command before you use Emoject
```shell
php artisan vendor:publish --provider="Vendor\Emoject\EmojectServiceProvider"
```

## Utilisation

The `emoject('🚀')` function allows to generate the path png of the emoji. 

The complete function to use :
```php
<img src="{{ emoject('🚀') }}">
```

![Emoject](https://weblagence.com/images/emoject.gif)