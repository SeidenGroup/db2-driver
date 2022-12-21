<?php

namespace BWICompanies\DB2Driver;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DB2DriverServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('db2-driver');
        // Not a fluent thing, but operates on self. Tortured construct to be compatible with 1.12
        $this->publishes([
                $this->package->basePath("/../resources/stubs/DB2ServiceProvider.php") => base_path("app/Providers/DB2ServiceProvider.php"),
            ], "{$this->package->shortName()}-provider");
    }
}
