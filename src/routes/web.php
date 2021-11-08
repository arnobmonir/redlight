<?php

use Illuminate\Support\Facades\Artisan;

Route::get('red-light', function () {

    Artisan::call('down');
    return redirect('/');
});
Route::get('green-light', function () {

    Artisan::call('up');
    return redirect('/');
});
