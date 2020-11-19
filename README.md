# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravelrotebal/govnova.svg?style=flat-square)](https://packagist.org/packages/laravelrotebal/govnova)
[![Build Status](https://img.shields.io/travis/laravelrotebal/govnova/master.svg?style=flat-square)](https://travis-ci.org/laravelrotebal/govnova)
[![Quality Score](https://img.shields.io/scrutinizer/g/laravelrotebal/govnova.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravelrotebal/govnova)
[![Total Downloads](https://img.shields.io/packagist/dt/laravelrotebal/govnova.svg?style=flat-square)](https://packagist.org/packages/laravelrotebal/govnova)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require laravelrotebal/govnova
```

## Usage

``` php
use Laravel\Nova\Nova;
use LaravelRotEbal\GovNova\GovNova;

class YourServiceProvider extends ServiceProvider {
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            GovNova::media('my', __DIR__ . '/../dist/media/');
        });
    }

}
```

```
GET https://localhost/nova-api/media/my/image.png
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email 38257723+4n70w4@users.noreply.github.com instead of using the issue tracker.

## Credits

- [Krot Eval](https://github.com/laravelrotebal)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
