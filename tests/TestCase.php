<?php

namespace Maggomann\FilamentShareManagement\Tests;

use Filament\FilamentServiceProvider;
use Livewire\LivewireServiceProvider;
use Maggomann\FilamentShareManagement\FilamentShareManagementServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            FilamentServiceProvider::class,
            FilamentShareManagementServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }
}
