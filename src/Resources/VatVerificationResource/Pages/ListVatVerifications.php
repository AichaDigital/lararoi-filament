<?php

declare(strict_types=1);

namespace AichaDigital\LararoiFilament\Resources\VatVerificationResource\Pages;

use AichaDigital\LararoiFilament\Resources\VatVerificationResource;
use Filament\Resources\Pages\ListRecords;

class ListVatVerifications extends ListRecords
{
    protected static string $resource = VatVerificationResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
