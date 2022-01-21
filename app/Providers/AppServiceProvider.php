<?php

namespace App\Providers;

use App\Models\SiteSettings;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Sending SiteSettings to every page
        view()->composer(['layouts.app', 'AdminPanel.layouts.main', 'AdminPanel.AdminUser.AdminLogin', 'User.UserLogIn', 'User.UserSignUp'], function ($view) {
            $site_title = SiteSettings::where('key', 'site_title')->first()->value;
            $logo_image = SiteSettings::where('key', 'logo_image')->first()->value;
            $meta_discription = SiteSettings::where('key', 'meta_discription')->first()->value;
            $brand_title = SiteSettings::where('key', 'brand_title')->first()->value;
            $footer_content = SiteSettings::where('key', 'footer_content')->first()->value;

            $facebook = SiteSettings::where('key', 'facebook_url')->first()->value;
            $instagram = SiteSettings::where('key', 'instagram_url')->first()->value;
            $youtube = SiteSettings::where('key', 'youtube_url')->first()->value;
            $twitter = SiteSettings::where('key', 'twitter_url')->first()->value;
            $social_links = compact('facebook', 'instagram', 'youtube', 'twitter');

            $phone = SiteSettings::where('key', 'site_contact')->first()->value;
            $email = SiteSettings::where('key', 'site_email')->first()->value;
            $contacts = compact('phone', 'email');

            $view->with(compact([
                'site_title', 'logo_image', 'meta_discription', 'brand_title',
                'footer_content', 'social_links', 'contacts'
            ]));
        });

        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
