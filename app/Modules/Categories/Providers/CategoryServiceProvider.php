<?php

namespace App\Modules\Categories\Providers;

use App\Modules\Categories\Repositories\CategoryRepository;
use App\Modules\Categories\Repositories\CategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Repository binding
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);

        // Service binding (optional, Laravel can auto-resolve)
        // $this->app->bind(CategoryService::class, function ($app) {
        //     return new UserService($app->make(UserRepositoryInterface::class));
        // });
    }
}
