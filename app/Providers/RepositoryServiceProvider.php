<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    private $repositories = [
        [
            'abstract' => "App\Repositories\Post\PostInterface",
            'concrete' => "App\Repositories\Post\PostRepository"
        ],
        [
            'abstract' => "App\Repositories\Client\ClientInterface",
            'concrete' => "App\Repositories\Client\ClientRepository"
        ],
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $repo) {
            $this->app->bind(
                $repo['abstract'],
                $repo['concrete'],
            );
        }

        /* $this->app->bind(
            'App\Repositories\Post\PostInterface',
            'App\Repositories\Post\PostRepository'
        );*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
