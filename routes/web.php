<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/comics', function () {
    $comics = config("php_db.comics");
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");

    return view('pages.comics', compact('comics', 'links', 'footer_nav', 'footer_img'));
});
