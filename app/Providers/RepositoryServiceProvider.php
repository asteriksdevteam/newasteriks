<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\UserInterface;
use App\Repositories\UserRepository;
use App\Interfaces\AdminHomeInterface;
use App\Repositories\AdminHomeRepository;
use App\Repositories\AdminAboutRepository;
use App\Interfaces\AdminAboutInterface;
use App\Interfaces\AdminCareersInterface;
use App\Repositories\AdminCareersRepository;
use App\Repositories\AdminServiceRepository;
use App\Interfaces\AdminServiceInterface;
use App\Repositories\AdminBlogRepository;
use App\Interfaces\AdminBlogInterface;
use App\Repositories\AdminContactRepository;
use App\Interfaces\AdminContactInterface;
use App\Interfaces\RoleUserInterface;
use App\Repositories\RoleUserRepository;
use App\Interfaces\OtherPagesInterfaces;
use App\Repositories\OtherPagesRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(AdminHomeInterface::class, AdminHomeRepository::class);
        $this->app->bind(AdminAboutInterface::class, AdminAboutRepository::class);
        $this->app->bind(AdminServiceInterface::class, AdminServiceRepository::class);
        $this->app->bind(AdminCareersInterface::class, AdminCareersRepository::class);
        $this->app->bind(AdminBlogInterface::class, AdminBlogRepository::class);
        $this->app->bind(AdminContactInterface::class, AdminContactRepository::class);
        $this->app->bind(RoleUserInterface::class, RoleUserRepository::class);
        $this->app->bind(OtherPagesInterfaces::class, OtherPagesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
