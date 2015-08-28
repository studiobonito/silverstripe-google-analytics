# Google Analytics Module

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Overview

Provide basic Google Analytics integration for SilverStripe CMS.

## Requirements

- SilverStripe 3.1.2 or newer.

## Install

### Via Composer

``` bash
$ composer require studiobonito/silverstripe-google-analytics
```

### Manually

Copy the 'silverstripe-google-analytics' folder to the root of your SilverStripe installation.

## Usage

The module provides a global template variable `$GoogleAnalytics` that can be used to insert the tracking code into any
page template. This global variable uses the tracking ID specified in the CMS in the `Setings > Google Analytics` tab.

Google suggests placing tracking code in your document `<head>` as in the example below. However this module leaves that
choice to the developer.

``` html
<head>
    <title>Example.com</title>
    $GoogleAnalytics
</head>
```

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email support@studiobonito.co.uk instead of using the issue tracker.

## Credits

- [Tom Densham][link-author]
- [All Contributors][link-contributors]

## License

The BSD-2-Clause License. Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/github/release/studiobonito/silverstripe-google-analytics.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/studiobonito/silverstripe-google-analytics/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/studiobonito/silverstripe-google-analytics.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/studiobonito/silverstripe-google-analytics.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/studiobonito/silverstripe-google-analytics.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/studiobonito/silverstripe-google-analytics
[link-travis]: https://travis-ci.org/studiobonito/silverstripe-google-analytics
[link-scrutinizer]: https://scrutinizer-ci.com/g/studiobonito/silverstripe-google-analytics/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/studiobonito/silverstripe-google-analytics
[link-downloads]: https://packagist.org/packages/studiobonito/silverstripe-google-analytics
[link-author]: https://github.com/nedmas
[link-contributors]: ../../contributors