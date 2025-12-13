<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\PersonalInfoRepositoryInterface;
use App\Repositories\Eloquent\EloquentPersonalInfoRepository;
use App\Repositories\Contracts\ExperienceRepositoryInterface;
use App\Repositories\Eloquent\EloquentExperienceRepository;
use App\Repositories\Contracts\PortfolioRepositoryInterface;
use App\Repositories\Eloquent\EloquentPortfolioRepository;
use App\Repositories\Contracts\BlogRepositoryInterface;
use App\Repositories\Eloquent\EloquentBlogRepository;
use App\Repositories\Contracts\SkillRepositoryInterface;
use App\Repositories\Eloquent\EloquentSkillRepository;
use App\Repositories\Contracts\SettingRepositoryInterface;
use App\Repositories\Eloquent\EloquentSettingRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PersonalInfoRepositoryInterface::class, EloquentPersonalInfoRepository::class);
        $this->app->bind(ExperienceRepositoryInterface::class, EloquentExperienceRepository::class);
        $this->app->bind(PortfolioRepositoryInterface::class, EloquentPortfolioRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, EloquentBlogRepository::class);
        $this->app->bind(SkillRepositoryInterface::class, EloquentSkillRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, EloquentSettingRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
