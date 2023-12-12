# A clean and minimal design for the Tabs component in Filament.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/filament-minimal-tabs.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-minimal-tabs)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ryangjchandler/filament-minimal-tabs/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ryangjchandler/filament-minimal-tabs/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/filament-minimal-tabs.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-minimal-tabs)

![](/assets/example.png)

This package provides a small stylesheet that creates a more minimal and modern design for Filament's `Tabs` component.

## Installation

You can install the package via Composer:

```bash
composer require ryangjchandler/filament-minimal-tabs
```

Publish the package's assets:

```sh
php artisan filament:assets
```

Register the plugin with your `PanelProvider`:

```php
use RyanChandler\MinimalTabs\MinimalTabsPlugin;

$panel
    ->plugin(MinimalTabsPlugin::make());
```

## Usage

After registering the plugin, all tabs inside of a Filament panel will have the minimal styling applied automatically. This includes **form tabs**, **infolist tabs**, **relation manager tabs**, and **table filter tabs**.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
