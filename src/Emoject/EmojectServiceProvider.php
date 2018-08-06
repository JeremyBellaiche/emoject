<?php

namespace Vendor\Emoject;

use Illuminate\Support\ServiceProvider;
use Vendor\Package\Commands\FooCommand;

/**
 * A Laravel 5.5 package boilerplate
 *
 * @author: Rémi Collin (remi@code16.fr)
 */
class EmojectServiceProvider extends ServiceProvider
{
    
    /**
     * This will be used to register config & view in
     * your package namespace.
     *
     * --> Replace with your package name <--
     *
     * @var  string
     */
    protected $packageName = 'emoject';
    
    /**
     * A list of artisan commands for your package
     *
     * @var array
     */
    protected $commands = [
    ];
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../public' => public_path($this->packageName),
        ]);
    }
    
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . '/Helpers/Emoject.php';
    
    }
}
