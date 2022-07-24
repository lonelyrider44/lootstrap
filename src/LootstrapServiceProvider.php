<?php

namespace LR\Lootstrap;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LootstrapServiceProvider extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views', 'lootstrap');

        Blade::component('input-text', View\Components\Forms\InputText::class);
        Blade::component('input-number', View\Components\Forms\InputNubmer::class);
        Blade::component('input-checkbox', View\Components\Forms\InputCheckbox::class);
        Blade::component('input-select', View\Components\Forms\InputSelect::class);
        Blade::component('input-textarea', View\Components\Forms\InputTextarea::class);
        Blade::component('input-flatpickr', View\Components\Forms\InputFlatpickr::class);
        Blade::component('input-tinymce', View\Components\Forms\InputTinymce::class);
        Blade::component('input-file', View\Components\Forms\InputFile::class);
        Blade::component('input-radio', View\Components\Forms\InputRadio::class);
        Blade::component('input-custom-number', View\Components\Forms\InputCustomNumber::class);
        Blade::component('tabs', View\Components\Tabs::class);
        Blade::component('tab', View\Components\Tab::class);
        Blade::component('permission-link', View\Components\PermissionLink::class);
    }
}
