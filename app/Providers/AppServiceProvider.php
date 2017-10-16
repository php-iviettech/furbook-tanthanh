<?php

namespace Furbook\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
    View::composer(
    'profile', 'Furbook\Http\ViewComposers\CatFromComposer'
    );}


    public function register()
    {
        //
}
}
