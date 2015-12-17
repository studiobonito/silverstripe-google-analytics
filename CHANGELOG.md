# Changelog

All Notable changes to `studiobonito/silverstripe-google-analytics` will be documented in this file

## [Unreleased]
### Added
- Updated module to work with SilverStripe CMS 3.2.

## [2.0.1] - 2015-09-02
### Added
- Added PHP 7 and PHP 5.3 with lowest dependencies to test suite.

### Changed
- Increased the minimum version for `silverstripe-framework` and `silverstripe-cms` to `3.1.2`.

### Fixed
- Removed `branch-alias` from `composer.json`.

## [2.0.0] - 2015-08-10
### Changed
- Moved `Google Analytics` tab inside `Services` tab to reduce `SiteConfig` clutter.
- Removed `Google Analytics` prefix from field label.

### Removed
- Removed `GoogleAnalyticsViewID` field from `GoogleAnalyticsSiteConfigExtension`.

### Fixed
- Added PHPDoc comment for `GoogleAnalyticsSiteConfigExtension->updateCMSFields()`.

[Unreleased]: https://github.com/studiobonito/silverstripe-google-analytics/compare/2.0.1...HEAD
[2.0.1]: https://github.com/studiobonito/silverstripe-google-analytics/compare/2.0.0...2.0.1
[2.0.0]: https://github.com/studiobonito/silverstripe-google-analytics/compare/1.0.0...2.0.0