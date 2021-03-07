<?php


namespace nilesolutions\NileSolutionsBuilders;

use Illuminate\Support\ServiceProvider;

/**
 * Class BuildersServiceProvider.
 */
class BuildersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/nilesolutions_builder.php' => config_path('nilesolutions_builder.php'),
        ], 'nilesolutions_builder-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/nilesolutions_builder.php',
            'nilesolutions_builder'
        );
    }
}
