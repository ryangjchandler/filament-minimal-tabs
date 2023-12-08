<?php

namespace RyanChandler\FilamentMinimalTabs;

use Filament\Forms\Components\Tabs;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MinimalTabsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'minimal-tabs';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name);
    }

    public function packageBooted()
    {
        Tabs::mixin(new TabsMixin());
    }
}
