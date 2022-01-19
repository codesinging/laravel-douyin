<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace CodeSinging\LaravelDouyin;

use Illuminate\Support\ServiceProvider;

class DouyinServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__) . '/config/douyin.php' => config_path('douyin.php'),
        ], 'laravel-douyin');
    }

    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/douyin.php', 'douyin');
        $this->app->singleton(Douyin::LABEL, Douyin::class);
    }
}