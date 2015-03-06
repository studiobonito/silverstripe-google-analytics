# Google Analytics Module

[![Latest Version](https://img.shields.io/github/release/studiobonito/silverstripe-google-analytics.svg?style=flat-square)](https://github.com/studiobonito/silverstripe-google-analytics/releases)
[![Software License](https://img.shields.io/badge/license-BSD-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/studiobonito/silverstripe-google-analytics/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/studiobonito/silverstripe-google-analytics/build-status/master)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/studiobonito/silverstripe-google-analytics.svg?style=flat-square)](https://scrutinizer-ci.com/g/studiobonito/silverstripe-google-analytics/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/studiobonito/silverstripe-google-analytics.svg?style=flat-square)](https://scrutinizer-ci.com/g/studiobonito/silverstripe-google-analytics)
[![Total Downloads](https://img.shields.io/packagist/dt/studiobonito/silverstripe-google-analytics.svg?style=flat-square)](https://packagist.org/packages/studiobonito/silverstripe-google-analytics)

## Overview

Provide basic Google Analytics integration for SilverStripe CMS.

## Requirements

- SilverStripe 3.1 or newer.

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

- [Tom Densham](https://github.com/nedmas)
- [All Contributors](../../contributors)

## License

The BSD-2-Clause License. Please see [License File](LICENSE.md) for more information.