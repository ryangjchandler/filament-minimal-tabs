<?php

namespace RyanChandler\FilamentMinimalTabs;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class MinimalTabsPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-minimal-tabs';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Css::make('filament-minimal-tabs', __DIR__ . '/../resources/dist/filament-minimal-tabs.css'),
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
