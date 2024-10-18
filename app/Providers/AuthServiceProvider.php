<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::before(function(User $user){
            if($user->id === 2) return true;
        });
        
        Gate::define('ability','can-edit', function(User $user, Post $post){
            var_dump('executou');
            if($user->id === $post->user_id){
                return Response::allow();
            }
            return Response::deny('Não é permitido fazer isso');
        });
    }
}
