<?php

namespace App\Providers;

use App\Models\Website\Donation;
use App\Models\Website\Post;
use App\Modules\Backend\Website\Cart\Repositories\CartRepository;
use App\Modules\Backend\Website\Cart\Repositories\EloquentCartRepository;
use App\Modules\Backend\Website\Category\Repositories\CategoryRepository;
use App\Modules\Backend\Website\Category\Repositories\EloquentCategoryRepository;
use App\Modules\Backend\Website\Donation\Repositories\DonationRepository;
use App\Modules\Backend\Website\Donation\Repositories\EloquentDonationRepository;
use App\Modules\Backend\Website\Event\Repositories\EloquentEventRepository;
use App\Modules\Backend\Website\Event\Repositories\EventRepository;
use App\Modules\Backend\Website\Faculty\Repositories\EloquentFacultyRepository;
use App\Modules\Backend\Website\Faculty\Repositories\FacultyRepository;
use App\Modules\Backend\Website\Help\Repositories\EloquentHelpRepository;
use App\Modules\Backend\Website\Help\Repositories\HelpRepository;
use App\Modules\Backend\Website\Order\Repositories\EloquentOrderRepository;
use App\Modules\Backend\Website\Order\Repositories\OrderRepository;
use App\Modules\Backend\Website\OrderItem\Repositories\EloquentOrderItemRepository;
use App\Modules\Backend\Website\OrderItem\Repositories\OrderItemRepository;
use App\Modules\Backend\Website\Post\Repositories\EloquentPostRepository;
use App\Modules\Backend\Website\Post\Repositories\PostRepository;
use App\Modules\Backend\Website\Product\Repositories\EloquentProductRepository;
use App\Modules\Backend\Website\Product\Repositories\ProductRepository;
use App\Modules\Backend\Website\RequestQuote\Repositories\EloquentGetTouchRepository;
use App\Modules\Backend\Website\RequestQuote\Repositories\GetTouchRepository;
use App\Modules\Backend\Website\Semester\Repositories\EloquentSemesterRepository;
use App\Modules\Backend\Website\Semester\Repositories\SemesterRepository;
use Illuminate\Support\ServiceProvider;

class DependencyInjectionServiceProvider extends ServiceProvider
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
        /**
         * User dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Authentication\User\Repositories\UserRepository::class,
            \App\Modules\Backend\Authentication\User\Repositories\EloquentUserRepository::class
        );

        /**
         * Permission dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Authentication\Permission\Repositories\PermissionRepository::class,
            \App\Modules\Backend\Authentication\Permission\Repositories\EloquentPermissionRepository::class
        );

        /**
         * Role dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Authentication\Role\Repositories\RoleRepository::class,
            \App\Modules\Backend\Authentication\Role\Repositories\EloquentRoleRepository::class
        );

        /**
         * Site Setting dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Settings\SiteSetting\Repositories\SiteSettingRepository::class,
            \App\Modules\Backend\Settings\SiteSetting\Repositories\EloquentSiteSettingRepository::class
        );

        /**
         * Slider dependency
         */
        $this->app->bind(
            \App\Modules\Backend\Website\Slider\Repositories\SliderRepository::class,
            \App\Modules\Backend\Website\Slider\Repositories\EloquentSliderRepository::class
        );
        /**
        CMS
         * Banner dependency
         */
        $this->app->bind(
            PostRepository::class,
            EloquentPostRepository::class
        );
        /**CMS
         * Banner dependency
         */
        $this->app->bind(
            PostRepository::class,
            EloquentPostRepository::class
        );

        /**
        *Request
         */
        $this->app->bind(
            \App\Modules\Backend\Website\GetTouch\Repositories\GetTouchRepository::class,
            \App\Modules\Backend\Website\GetTouch\Repositories\EloquentGetTouchRepository::class
        );

        $this->app->bind(
            EventRepository::class,
            EloquentEventRepository::class
        );

        $this->app->bind(
            HelpRepository::class,
            EloquentHelpRepository::class
        );
       $this->app->bind(
           DonationRepository::class,
           EloquentDonationRepository::class
       );

       $this->app->bind(
           ProductRepository::class,
           EloquentProductRepository::class
       );
       $this->app->bind(
           CartRepository::class,
           EloquentCartRepository::class
       );
       $this->app->bind(
           OrderItemRepository::class,
           EloquentOrderItemRepository::class
       );
       $this->app->bind(
           OrderRepository::class,
           EloquentOrderRepository::class
       );

       $this->app->bind(
           SemesterRepository::class,
           EloquentSemesterRepository::class
       );

       $this->app->bind(
           FacultyRepository::class,
           EloquentFacultyRepository::class
       );
    }
}
