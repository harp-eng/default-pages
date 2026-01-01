<?php

use Illuminate\Support\Facades\Route;
use Harpreet\DefaultPages\Http\Controllers\PageController;

Route::group([
    'prefix' => config('default-pages.routes_prefix')
], function () {

    $pages = config('default-pages.pages');

    foreach ($pages as $key => $page) {
        Route::get($page['path'], [PageController::class, 'show'])
            ->name('default-pages.' . $key)
            ->defaults('page', $key);
    }
});
