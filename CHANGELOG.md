# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- API classes and models for the Shellrent API 3.0.0, generated with OpenAPI Generator 7.25.0.
- `Client::create()`, with one accessor per API class.
- OAuth2 client credentials authentication, with the token cached in memory and in an optional PSR-16 cache.
- Retries of the requests rejected with 429 Too Many Requests, following `Retry-After`.

[Unreleased]: https://github.com/shellrent/shellrent-sdk-php/commits/main
