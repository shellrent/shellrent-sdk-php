# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.1.0] - 2026-09-30

### Added

- API classes and models for the Shellrent API 3.0.0, generated with OpenAPI Generator 7.25.0 from the
  OpenAPI 3.1 specification, with the nullable and required properties it declares. The models composed
  with `allOf` of another model extend it, for example `ServiceServer` extends `Service`.
- `Client::create()`, with one accessor per API class.
- OAuth2 client credentials authentication, with the token cached in memory and in an optional PSR-16 cache.
- Retries of the requests rejected with 429 Too Many Requests, following `Retry-After`. When the retries
  run out, `ApiException::getResponseObject()` returns the `ApiError` of the 429, and `TokenException::getError()`
  returns `rate_limited` for the token endpoint.

### Security

- Requires `guzzlehttp/guzzle` 7.15.2 and `guzzlehttp/psr7` 2.13 or later: earlier versions have published
  security advisories.

[Unreleased]: https://github.com/shellrent/shellrent-sdk-php/compare/v0.1.0...HEAD
[0.1.0]: https://github.com/shellrent/shellrent-sdk-php/releases/tag/v0.1.0
