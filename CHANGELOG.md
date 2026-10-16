# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

Regenerated from the new revision of the Shellrent API 3.0.0 specification, with English descriptions.
Breaking changes for the code that uses the operations and the models renamed or removed below.

### Added

- `ServerApi::createServerPowerAction()` (start, stop, reboot, hard reboot, hard stop),
  `listPrivateCloudAvailableIpAddresses()`, `PecApi::getPecMailboxOwnerChange()`,
  `PaymentApi::createOneClickPayment()` and `createPrepaidCreditPayment()`.
- Models `DomainDetail`, `DomainNameserver`, `DomainPremiumPrices`, `HostingPhpSetting`, `License`,
  `PaymentProviderData`, `ServerPowerActionRequest`, `SslCertificateExportRequest` and their responses.
- `canPayOrder()` takes `$one_click_id` and `$prepaid_credit`; `listSmsMessages()` and `listSmsPrices()`
  take `$page` and `$per_page`.

### Changed

- `canReemitSslCertificate()` and `reemitSslCertificate()` are renamed `canReissueSslCertificate()` and
  `reissueSslCertificate()`, and `SslCertificateCanReemit` is renamed `SslCertificateCanReissue`.
- Renamed models: `HostingEmailBlocList` to `HostingEmailBlockList`, `DomainResponse` to
  `DomainDetailResponse`, `ServiceServerListResponse` to `ServiceServerPaginatedListResponse`,
  `GetHostingAntivirus200Response` to `HostingAntivirusNullableResponse`, `BuyServiceCloudVpsRequestAllOfData`
  and `BuyServiceCpanelLicenseRequestAllOfData` to `BuyServiceCloudVpsRequestData` and
  `BuyServiceCpanelLicenseRequestData`. `CpanelLicense` and `PleskLicense` are replaced by `License`.
- `ServiceServer` no longer extends `Service`: it declares all the properties of the service itself.
- Renamed parameters (named arguments): `$creditnote_id` to `$credit_note_id`, `$cronjob_id` to
  `$cron_job_id`, `$microsoft365_id` to `$microsoft_365_subscription_id`, `$topup_id` to `$top_up_id`.
- `exportSslCertificate()` takes an `SslCertificateExportRequest` instead of `$format`, `uploadFile()` takes
  `$file` (multipart) instead of `$body`, and `createHostingDatabase()` has no request body.
- `meta` of the responses that are not paginated lists and `data` of `EmptyResponse` are always null
  (`const: null` in the specification): their type is `mixed` instead of `object`.
- The URLs of many operations follow the new paths of the API (for example `/api/v3/credit-notes`), and
  some properties are now nullable, for example `Service::$activation_price`.

### Removed

- The SecureMail operations and models, `payOrders()` (use `createOneClickPayment()` or
  `createPrepaidCreditPayment()`), `startServer()`, `stopServer()`, `rebootServer()`, `hardRebootServer()`
  and `hardStopServer()` (use `createServerPowerAction()`), `startServerFirstBackup()` and
  `createHostingCatchAll()` (use `updateHostingCatchAll()`).
- The normalizer rule `REF_AS_PARENT_IN_ALLOF`: the specification no longer uses `allOf`.

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
