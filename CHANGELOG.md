# Changelog

All notable changes to this project are documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.0] - 2026-10-30

Regenerated from the Shellrent API specification with the new SSL checks of the hosting and the discounted
renew price of the purchases. No breaking changes in names or signatures.

### Added

- `HostingApi::canInstallHostingSslCertificate()` (`GET /api/v3/hostings/{hosting_id}/ssl-certificates/can-install`):
  whether an SSL certificate can be installed on the hosting now, with the same fields of the installation, and
  why not (`reason`: `ALREADY_INSTALLED`, `CNAME_MISSING`, `LIMIT_REACHED`, `HOSTING_NOT_ACTIVE`,
  `MAIL_NOT_SUPPORTED`, `OPERATION_RUNNING`). For a Let's Encrypt certificate, `dns_delegation` has the CNAME
  record that delegates its DNS validation, which must be created when the DNS are not on the Shellrent nameservers.
- Models `HostingSslCertificateCanInstall`, `HostingSslCertificateCanInstallReason` (enum of `reason`),
  `HostingSslCertificateCanInstallResponse` and `HostingSslDnsDelegation`.
- `Purchase::$renew_price_discounted` (`getRenewPriceDiscounted()`): the renew price with the discount of the
  discount promotion applied to the purchase; null without a discount and for sub-accounts.

### Changed

- `HostingSslCertificateInstallRequest`: `destination_type` has no default and is not sent unless set. The API
  then installs on the website and the mail of a main hosting (`all`), or on the website of a subdomain (`web`).
  `cn_type` defaults to `WILDCARD` instead of `NORMAL`, and is ignored with `ssl_certificate_id`.
- `installHostingSslCertificate()` follows the rules of the control panel. A Let's Encrypt certificate with DNS
  that are not on the Shellrent nameservers requires the CNAME record of `dns_delegation` (409 without it).
  `ssl_certificate_id` accepts only the active certificates of the owner of the hosting (404 otherwise), and on
  the mail servers only wildcard certificates or certificates with SAN (400). A certificate already installed,
  the limit of Let's Encrypt installations or an operation running respond 409 instead of 400, and a mail
  server that does not accept certificates responds 403.
- Descriptions of the OAuth2 errors updated with `unauthorized_client` (owner of the client without two-factor
  authentication).

## [1.0.0]

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

[Unreleased]: https://github.com/shellrent/shellrent-sdk-php/compare/v1.1.0...HEAD
[1.1.0]: https://github.com/shellrent/shellrent-sdk-php/releases/tag/v1.1.0
[1.0.0]: https://github.com/shellrent/shellrent-sdk-php/releases/tag/v1.0.0
[0.1.0]: https://github.com/shellrent/shellrent-sdk-php/releases/tag/v0.1.0
