<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\Categories;
use View;//ana eely bktebha
use App\Models\category;
class AllCategoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //3ayzeen n3red fe elview fun('msar elblade','msar elclass')
        View::composer('web.AllCategories' , 'App\Http\ViewComposers\Categories');
        //View::composer('web.mainFrame' , 'App\Http\ViewComposers\Categories');
    }
}
