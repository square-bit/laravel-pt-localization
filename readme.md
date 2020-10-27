# Laravel PHP Framework - Localization Portuguese Version

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require squarebit/localization
```

## Usage
##### 1. Publish command
  ```shell
  $ php artisan vendor:publish --tag=laravel-pt-Localization
  ```
##### 2. Set Portuguese(pt) language as default
  ```
  // Change line 83 in file config/app.php:
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

GPL-3.0-or-later. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/square-bit/localization.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/square-bit/localization.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/squarebit/localization
[link-downloads]: https://packagist.org/packages/squarebit/localization
[link-author]: https://github.com/square-bit
[link-contributors]: ../../contributors
