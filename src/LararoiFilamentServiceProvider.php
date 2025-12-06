<?php

namespace AichaDigital\LararoiFilament;

use AichaDigital\LararoiFilament\Commands\LararoiFilamentCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LararoiFilamentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lararoi-filament')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lararoi_filament_table')
            ->hasCommand(LararoiFilamentCommand::class);
    }
}
