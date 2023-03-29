<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isSuperAdmin', function($user){
            return $user->role == 'Super Admin';
        });

        Gate::define('isAdmin', function($user){
            return $user->role == 'Admin';
        });

        Gate::define('isfreelancer', function($user){
            return $user->role == 'Freelancer';
        });

        // Gate::define('isUser', function(User $user){
        //     return $user->role == 'user';
        // });
    }
}
