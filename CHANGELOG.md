# Changelog

All Notable changes to `studiobonito/silverstripe-google-analytics` will be documented in this file

## [2.0.0] - 2015-08-10
### Changed
- Moved `Google Analytics` tab inside `Services` tab to reduce `SiteConfig` clutter.
- Removed `Google Analytics` prefix from field label.

### Removed
- Removed `GoogleAnalyticsViewID` field from `GoogleAnalyticsSiteConfigExtension`.

### Fixed
- Added PHPDoc comment for `GoogleAnalyticsSiteConfigExtension->updateCMSFields()`.