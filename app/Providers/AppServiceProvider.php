<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Alert;
use App\View\Components\Inputs\Button;
use App\View\Components\Forms\Button as FormButton;
use App\View\Components\HomeLink;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('datetime', function($expression){
            $expression = trim($expression, '\'');
            $expression = trim($expression, '"');
         if(!empty($dateObj)){
            $dateFormat = $dateObj->format('d/m/Y H:i:s');
            return $dateFormat;
         }
         return false;
    });
    Blade::component('package-alert', Alert::class);
    Blade::component('button', Button::class);
    Blade::component('form-button', FormButton::class);
    Blade::component('home-link', HomeLink::class);
}
}
