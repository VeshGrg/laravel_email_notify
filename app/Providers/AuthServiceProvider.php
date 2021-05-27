<?php

namespace App\Providers;

use App\Models\Share;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
        Gate::define('delete-share', function (User $user, Share $share){
            return $user->id === $share->user_id;
        });
        Gate::define('update-share', function (User $user, Share $share){
            return $user->id === $share->user_id;
        });

    }
}
