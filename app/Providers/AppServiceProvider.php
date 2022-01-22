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
            $site_title = SiteSettings::where('key', 'site_title')->first();
            $logo_image = SiteSettings::where('key', 'logo_image')->first();
            $meta_discription = SiteSettings::where('key', 'meta_discription')->first();
            $brand_title = SiteSettings::where('key', 'brand_title')->first();
            $footer_content = SiteSettings::where('key', 'footer_content')->first();

            $facebook = SiteSettings::where('key', 'facebook_url')->first();
            $instagram = SiteSettings::where('key', 'instagram_url')->first();
            $youtube = SiteSettings::where('key', 'youtube_url')->first();
            $twitter = SiteSettings::where('key', 'twitter_url')->first();
            $social_links = compact('facebook', 'instagram', 'youtube', 'twitter');

            $phone = SiteSettings::where('key', 'site_contact')->first();
            $email = SiteSettings::where('key', 'site_email')->first();
            $contacts = compact('phone', 'email');

            $view->with(compact([
                'site_title', 'logo_image', 'meta_discription', 'brand_title',
                'footer_content', 'social_links', 'contacts'
            ]));
        });
        view()->composer(['AdminPanel.layouts.main'], function ($view) {
            $request = request();
            $status = false;
            $user = $request->session()->get('AdminUser');
            if ($user) {
                $status = true;
            }
            $view->with(compact(['user', 'status']));
        });
        view()->composer(['layouts.app'], function ($view) {
            $request = request();
            $title = "Guest";
            $user = $request->session()->get('user');
            $status = false;
            if ($user) {
                $status = true;
                $title = $user['name'];
                if ($user['type'] == "A" || $user['type'] == "R") {
                    $request->session()->put('AdminUser', $user);
                }
            }
            $view->with(compact(['user', 'status', 'title']));
        });

        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
