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
})->name('comics');


Route::get('/comics/{index}', function (string $index) {
    $comics = config("php_db.comics");
    if (isset($comics[$index])) {
        //dd($comics[$index]);
        $comic = $comics[$index];
        $links = config("php_db.header.links");
        $footer_nav = config("php_db.footer.footer_links");
        $footer_img = config("php_db.footer.img_paths");
        return view('pages.singleComic', compact('comic', 'links', 'footer_nav', 'footer_img'));
    } else {
        abort(404);
    }
})->name('comic.show');


Route::get('/characters', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.characters', compact('links', 'footer_nav', 'footer_img'));
})->name('characters');

Route::get('/movies', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.movies', compact('links', 'footer_nav', 'footer_img'));
})->name('movies');

Route::get('/tv', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.tv', compact('links', 'footer_nav', 'footer_img'));
})->name('tv');


Route::get('/games', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.games', compact('links', 'footer_nav', 'footer_img'));
})->name('games');

Route::get('/collectibles', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.collectibles', compact('links', 'footer_nav', 'footer_img'));
})->name('collectibles');

Route::get('/videos', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.videos', compact('links', 'footer_nav', 'footer_img'));
})->name('videos');

Route::get('/fans', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.fans', compact('links', 'footer_nav', 'footer_img'));
})->name('fans');

Route::get('/news', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.news', compact('links', 'footer_nav', 'footer_img'));
})->name('news');

Route::get('/shop', function () {
    $links = config("php_db.header.links");
    $footer_nav = config("php_db.footer.footer_links");
    $footer_img = config("php_db.footer.img_paths");
    return view('pages.shop', compact('links', 'footer_nav', 'footer_img'));
})->name('shop');
