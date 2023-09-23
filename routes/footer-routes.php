<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('footerPages.about');
})->name('footer-about');


Route::get('/contact', function () {
    return view('footerPages.contact-us');
})->name('footer-contact');

Route::get('/faqs', function () {
    return view('footerPages.faqs');
})->name('footer-faqs');

Route::get('/privacy-policy', function () {
    return view('footerPages.privacy-policy');
})->name('footer-privacy');

Route::get('/terms-and-conditions', function () {
    return view('footerPages.terms-conditions');
})->name('footer-terms');
