<?php

namespace App\Providers;

use App\Models\Company;
use Illuminate\Support\ServiceProvider;
use App\Rules\SizeExistence;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Illuminate\Pagination\Paginator;

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
        Validator::extend('size_existence', function ($attribute, $value, $parameters, $validator) {
            $rule = new SizeExistence($parameters);

            return $rule->passes($attribute, $value);
        });

        Inertia::share('company', function () {
            return Company::select(
                'ruc',
                'name',
                'business_name',
                'tradename',
                'fiscal_address',
                'phone',
                'representative',
                'email',
                'logo',
                'logo_document',
                'ubigeo',
                'logo_negative',
                'logo_dark',
                'isotipo',
                'isotipo_negative',
                'isotipo_dark'
            )->first();
        });
        Paginator::useBootstrap();
    }
}
