<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;

Route::get('/', function () {
    return redirect('/cvs');
});


Route::resource('cvs', CvController::class);