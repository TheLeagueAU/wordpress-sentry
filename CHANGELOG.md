# Changelog

## [Unreleased]

## [1.3.0] - 2017-03-17
### Added
- CHANGELOG.md, with content migrated from readme.txt.
- AUTHORS, COPYRIGHT and COPYING.md

### Changed
- Updated Sentry SDK to 1.6.2
- Updated plugin headers: Renamed plugin to WordPress Sentry, updated URIs and Author, added License information, added plugin URI for github-updater plugin.

### Removed
- Removed make_release.sh as it is obsolete.
- Removed readme.txt. Its contents are now available in other files (README.md, AUTHORS, COPYRIGHT, COPYING.md, CHANGELOG.md)

## [1.2] - 2016-05-17
- Adding the ability to access the Raven client directly to send custom error messages to sentry. Merge PR from @wk8.

## [1.1] - 2016-05-17
- Upgrade raven php client to v0.15.0

## [1.0] - 2016-02-06
- Bump version to 1.0 because the WordPress plugins page keeps showing Version 1 as the current version for some reason

## [0.5] - 2016-02-06
- Bump version to correct errant stable version number

## [0.4] - 2016-02-06
- Bump version to sync with wordpress.org plugins page

## [0.3] - 2016-02-06
- Now registering php error handlers with Raven client to improve error reporting.

## [0.2] - 2015-02-25
-  Updated Raven PHP Client

## 0.1 - 2015-02-25
- Added first release.


[Unreleased]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v0.1.2...HEAD
[1.3.0]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v1.2...v1.3.0
[1.2]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v1.1...v1.2
[1.1]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v1.0...v1.1
[1.0]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v0.5...v1.0
[0.5]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v0.4...v0.5
[0.4]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v0.3...v0.4
[0.3]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v0.2...v0.3
[0.2]: https://github.com/TheLeagueAU/wordpress-sentry/compare/v0.1...v0.2
