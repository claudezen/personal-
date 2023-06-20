<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $image = ['https://media.istockphoto.com/id/135341581/photo/old-books-in-a-library-big-file.jpg?s=612x612&w=0&k=20&c=mahB12CP-VHRYQYNLV0ZQ8CTtHbIWY2qpWlQaZNUgy8=',
        'https://i.pinimg.com/originals/b9/9f/45/b99f458e76d87406796a10cace13938a.jpg',
        'https://e1.pxfuel.com/desktop-wallpaper/941/506/desktop-wallpaper-old-library-anime-old-library.jpg',
        'https://media.istockphoto.com/id/510635869/photo/books-on-library-shelf.jpg?s=612x612&w=0&k=20&c=w7MBUfTRGZjBT0TbT8Hl4H5K7yLnjeiVGR8VYOoM8xs=',
        'https://miro.medium.com/v2/resize:fit:1400/1*LyFo-ncGtb_nSqHLms1m5Q.jpeg'];
    $i = random_int(0, 4);
    $img = $image[$i];
    return view('welcome', compact('img'));
});

Auth::routes();

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/library', [Controllers\BookController::class, 'index'])->name('library');
Route::get('/library/{query}', [Controllers\BookController::class, 'show'])->name('library.show');
Route::get('/rent/{book}', [Controllers\RentController::class, 'show'])->name('rent.show');
