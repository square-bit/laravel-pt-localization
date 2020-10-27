# Portuguese Localization package for Laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides Portuguese (from Portugal) translation language files for Laravel 8.

## Installation

Via Composer

``` bash
$ composer require squarebit/localization
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

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email info@square-bit.com instead of using the issue tracker.

## Credits

- [Squarebit][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/square-bit/localization.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/square-bit/localization.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/squarebit/localization
[link-downloads]: https://packagist.org/packages/squarebit/localization
[link-author]: https://github.com/square-bit
[link-contributors]: ../../contributors
