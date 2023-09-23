<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => ['auth']], __DIR__ . '/customersTable.php');
Auth::routes();
Route::group([], __DIR__ . '/listsRoutes.php');
Route::group([], __DIR__ . '/linksRoutes.php');
Route::group([], __DIR__ . '/homeRoutes.php');
Route::group([], __DIR__ . '/profile.php');
Route::group([], __DIR__ . '/footer-routes.php');


Route::get('/extension', function () {
    return view('soon-extension');
})->name('soon-extension');
