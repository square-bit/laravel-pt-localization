# Portuguese Localization package for Laravel

[![Latest Stable Version](https://poser.pugx.org/square-bit/laravel-pt-localization/v)](//packagist.org/packages/square-bit/laravel-pt-localization)
[![License](https://poser.pugx.org/square-bit/laravel-pt-localization/license)](//packagist.org/packages/square-bit/laravel-pt-localization)
[![Total Downloads](https://poser.pugx.org/square-bit/laravel-pt-localization/downloads)](//packagist.org/packages/square-bit/laravel-pt-localization)

This package provides Portuguese (from Portugal) translation language files for Laravel 11.

## Installation

Via Composer

``` bash
$ composer require square-bit/laravel-pt-localization
```

## Usage
##### 1. Publish command
  ```shell
  $ php artisan vendor:publish --tag=laravel-pt-localization
  ```
##### 2. Set Portuguese(pt) language as default
  ```
  // file: config/app.php:
  
  'locale' => 'pt',
  ```
## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email info@square-bit.com instead of using the issue tracker.

## Credits

- [Squarebit][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[link-author]: https://github.com/square-bit
[link-contributors]: ../../contributors
