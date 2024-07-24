<?php

namespace App\Providers;


use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('AuthCustom', function () {

            return "<?php   
            \$email = session('email');
            \$token = session('token');
            \$user = \App\Models\User::where('email', \$email)->first();
            \$logic = \$user && \$user->token == \$token;

            if(\$logic):
            
            ?>";
        });

        Blade::directive('endAuthCustom', function () {
            return '<?php endif; ?>';
        });


        Blade::directive('GuestCustom', function () {
            return "<?php
                 \$email = session('email');
                \$token = session('token');
                \$user = null;

                if (\$email && \$token) {
                    \$user = \App\Models\User::where('email', \$email)->first();
                }

                \$logic = !(\$user && \$user->token == \$token);

                if (\$logic):
            ?>";
        });

        Blade::directive('endGuestCustom', function () {
            return '<?php endif; ?>';
        });
    }
}
