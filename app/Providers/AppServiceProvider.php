<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
>>>>>>> ae55eabf7373d5ebda76e6e836bc54dae3446e3f
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
<<<<<<< HEAD
=======

    protected $customerMsg = [

    ];

>>>>>>> ae55eabf7373d5ebda76e6e836bc54dae3446e3f
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
<<<<<<< HEAD
        //
=======
        #sql打印
        DB::listen(function ($query) {
            $sq = $query->sql .PHP_EOL. json_encode($query->bindings).PHP_EOL.$query->time.PHP_EOL;
            Log::channel('sql')->debug($sq);
        });
>>>>>>> ae55eabf7373d5ebda76e6e836bc54dae3446e3f
    }
}
