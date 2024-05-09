<?php

namespace App\Providers;

use App\Models\model_customer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\model_karyawan;
use App\Models\model_role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('isMO', function (model_karyawan $user) {
            return $user->Role_Id == model_role::where('Nama', 'MO')->first()->Id;
        });

        Gate::define('isAdmin', function (model_karyawan $user) {
            return $user->Role_Id == model_role::where('Nama', 'Admin')->first()->Id;
        });

        Gate::define('isOwner', function (model_karyawan $user) {
            return $user->Role_Id == model_role::where('Nama', 'Owner')->first()->Id;
        });

        Gate::define("isMOorAdmin", function (model_karyawan $user) {
            return $user->Role_Id == model_role::where('Nama', 'MO')->first()->Id || $user->Role_Id == model_role::where('Nama', 'Admin')->first()->Id;
        });

         $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/courier'),
        ], 'public');  

    }
}
