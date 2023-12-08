<?php

namespace RyanChandler\FilamentMinimalTabs;

use Closure;

/**
 * @mixin \Filament\Forms\Components\Tabs
 */
class TabsMixin
{
    public function minimal(): Closure
    {
        return function () {
            $this->extraAttributes([
                'class' => 'fi-tabs-minimal',
            ]);

            return $this;
        };
    }
}
