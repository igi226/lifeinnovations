<?php

namespace App\Providers;

use App\Repositories\Category\CategoryInterface;
use App\Repositories\Category\Categoryrepository;
use App\Repositories\Cms\CmsInterface;
use App\Repositories\Cms\CmsRepository;
use App\Repositories\Sitesetting\SiteInterface;
use App\Repositories\Sitesetting\SiteRepository;
use App\Repositories\TimelinePost\PostInterface;
use App\Repositories\TimelinePost\Postrepository;
use App\Repositories\User\UserInterface;
use App\Repositories\User\Userrepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\User\UserInterface', 'App\Repositories\User\Userrepository');
        $this->app->bind(SiteInterface::class,SiteRepository::class);
        $this->app->bind(CategoryInterface::class,Categoryrepository::class);
        $this->app->bind(PostInterface::class, Postrepository::class);
        $this->app->bind(CmsInterface::class, CmsRepository::class);
    }
    // UserInterface::class, Userrepository::class
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
