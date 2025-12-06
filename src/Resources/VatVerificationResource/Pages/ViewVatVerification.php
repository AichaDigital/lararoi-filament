<?php

declare(strict_types=1);

namespace AichaDigital\LararoiFilament\Resources\VatVerificationResource\Pages;

use AichaDigital\LararoiFilament\Resources\VatVerificationResource;
use Filament\Resources\Pages\ViewRecord;

class ViewVatVerification extends ViewRecord
{
    protected static string $resource = VatVerificationResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
