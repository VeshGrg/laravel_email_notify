<?php

namespace App\Providers;

use App\Models\Share;
use App\Models\User;
use App\Policies\SharePolicy;
use App\Policies\UserPolicy;
use Illuminate\Auth\Access\Response;
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
        User::class => UserPolicy::class,
         Share::class => SharePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
//        Gate::define('delete-share', function (User $user){
//            return $user->role == 'admin' ?
//                Response::allow():
//                Response::deny('You must be an Administrator');
//        });
//        Gate::define('update-share', function (User $user, Share $share){
//            return $user->id === $share->user_id;
//        });

    }
}
