<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;
use ImageKit\ImageKit;
use League\Flysystem\Filesystem;
use TaffoVelikoff\ImageKitAdapter\ImagekitAdapter;
use Illuminate\Filesystem\FilesystemAdapter;
use App\Models\Layout;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ImagekitAdapter::class, function ($app, $config) {
            return new ImagekitAdapter(
                new ImageKit(
                    config('services.imagekit.public_key'),
                    config('services.imagekit.private_key'),
                    config('services.imagekit.url_endpoint')
                )
            );
        });

        Storage::extend('imagekit', function ($app, $config) {
            $adapter = $app->make(ImagekitAdapter::class);
            return new FilesystemAdapter(
                new Filesystem($adapter, $config),
                $adapter,
                $config
            );
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Builder::useVite();
        require_once app_path('helpers.php');
        
        // varialble accessible for all views   
        $menu_layouts = Cache::rememberForever('menu_layouts', function(){
            return Layout::select('name','name_slug','status')->get()->sortByDesc('status');
        });
        View::share('menu_layouts', $menu_layouts);
    }
}
