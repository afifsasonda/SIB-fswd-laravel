<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
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
        $product = [
            'laptop',
            'Tv',
            'Handphone',
            'Jam Tangan',
            'Baju'
        ];



        View::composer(['product','productlist'],function($view) use($product){
            $view->with('nama',$product);
        });
    }
}
