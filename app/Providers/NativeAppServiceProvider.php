<?php

namespace App\Providers;

use Native\Desktop\Contracts\ProvidesPhpIni;
use Native\Desktop\Facades\Window;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    public function boot(): void
    {
        Window::open();
    }

    /**
     * @return array<string, string>
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}
