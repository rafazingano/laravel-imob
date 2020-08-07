<?php

namespace ConfrariaWeb\Imob\Providers;

use Illuminate\Support\ServiceProvider;
use ConfrariaWeb\Imob\Commands\InstallPackage;

class ImobServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallPackage::class
            ]);
        }
    }

    public function register()
    {

    }

}
