<?php

namespace RyanChandler\FilamentMinimalTabs;

use Filament\Forms\Components as Forms;
use Filament\Infolists\Components as Infolists;
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
        Forms\Tabs::mixin(new TabsMixin());
        Infolists\Tabs::mixin(new TabsMixin());
    }
}
