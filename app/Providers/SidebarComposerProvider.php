<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SidebarComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->composeSidebar();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function composeSidebar()
    {
        view()->composer('layouts/app', 'App\Http\Composers\SidebarComposer');
        view()->composer('articles/create', 'App\Http\Composers\SidebarComposer');
    }



}
