<?php

namespace App\Providers;

use App\Models\Centro;
use App\Models\User;
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

        Gate::define('create', function (User $user) {
            if($user->user_role !== 'viewer') {
                return true;
            }
        });
        Gate::define('show', function (User $user, Centro $centro) {
            if($user->id === $centro->user_id || $user->user_role === 'admin') {
                return true;
            }
        });
        Gate::define('edit', function (User $user, Centro $centro) {
            if($user->user_role !== 'viewer') {
                return true;
            }
        });
        Gate::define('update', function (User $user, Centro $centro) {
            return $user->id === $centro->user_id;
        });
        Gate::define('delete', function (User $user, Centro $centro) {
            if($user->id === $centro->user_id || $user->user_role === 'admin') {
                return true;
            }
        });
    }
}
