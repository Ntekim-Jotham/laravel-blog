<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use App\GetMentionedUsers;
use Illuminate\Support\ServiceProvider;

class GetMentionedUsersServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('GetMentionedUsers', function() {
            return GetMentionedUsers::class;
        });
    }
}
