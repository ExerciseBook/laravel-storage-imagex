<?php

namespace ExerciseBook\Laravel\Storage\ImageX\Provider;

use ExerciseBook\Flysystem\ImageX\ImageXAdapter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;

class ImageXServiceProvider extends ServiceProvider {

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot() {
        Storage::extend('imagex', function ($app, $config) {
            return new Filesystem(new ImageXAdapter($config));
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register() {
        //
    }
}
