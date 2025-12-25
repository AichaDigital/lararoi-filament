<?php

declare(strict_types=1);

namespace AichaDigital\LararoiFilament;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LararoiFilamentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('lararoi-filament')
            ->hasTranslations();
    }
}
