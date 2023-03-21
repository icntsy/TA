<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\L5Swagger\L5SwaggerServiceProvider::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::directive('rupiah', function ($amount){
            return "Rp. <?php echo number_format($amount, 0, ',', '.'); ?>";
        });
        \Blade::if('role', function ($value){
            $roles = explode("|", $value);
            return in_array(\Auth::user()->role, $roles);
        });
    }
}
