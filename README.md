# Lararoi Filament

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aichadigital/lararoi-filament.svg?style=flat-square)](https://packagist.org/packages/aichadigital/lararoi-filament)
[![Total Downloads](https://img.shields.io/packagist/dt/aichadigital/lararoi-filament.svg?style=flat-square)](https://packagist.org/packages/aichadigital/lararoi-filament)

> **Warning**
> This package is under active development and is NOT ready for production use.
> API and features may change without notice.

---

Filament admin panel resources for [Lararoi](https://github.com/AichaDigital/lararoi) - EU VAT/ROI verification.

## Requirements

- PHP 8.4+
- Laravel 11.x / 12.x
- Filament 4.x
- [aichadigital/lararoi](https://github.com/AichaDigital/lararoi) ^0.1
- [aichadigital/larabill-filament](https://github.com/AichaDigital/larabill-filament) ^0.1

## Installation

```bash
composer require aichadigital/lararoi-filament
```

## Features

This package adds ROI (Registro de Operadores Intracomunitarios) functionality to Larabill Filament:

- **VAT Verification** - VIES validation for EU customers
- **ROI Configuration** - Manage intra-community operator settings
- **Customer VAT Status** - Display EU VAT registration status
- **Threshold Monitoring** - Track EU sales thresholds (OSS)

## Usage

Resources are automatically registered and extend LarabillFilament CustomerResource.

## Related Packages

| Package | Description |
|---------|-------------|
| [lararoi](https://github.com/AichaDigital/lararoi) | Core ROI backend |
| [larabill-filament](https://github.com/AichaDigital/larabill-filament) | Base billing UI (required) |

## Testing

```bash
composer test
```

## Credits

- [Abdelkarim Mateos Sanchez](https://github.com/abkrim)
- [All Contributors](../../contributors)

## License

MIT License. See [LICENSE](LICENSE.md) for details.
