<?php

declare(strict_types=1);

namespace AichaDigital\LararoiFilament;

use AichaDigital\LararoiFilament\Resources\VatVerificationResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class LararoiFilamentPlugin implements Plugin
{
    protected bool $hasVatVerificationResource = true;

    public function getId(): string
    {
        return 'lararoi-filament';
    }

    public function register(Panel $panel): void
    {
        $resources = [];

        if ($this->hasVatVerificationResource) {
            $resources[] = VatVerificationResource::class;
        }

        $panel->resources($resources);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function vatVerificationResource(bool $condition = true): static
    {
        $this->hasVatVerificationResource = $condition;

        return $this;
    }

    public function hasVatVerificationResource(): bool
    {
        return $this->hasVatVerificationResource;
    }
}
