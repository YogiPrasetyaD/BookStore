<?php

use Illuminate\Support\Facades\Route;
use App\Models\Author;
use App\Models\BookCategory;
use App\Models\Book;
use App\Models\Rating;
use App\Models\Vote;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TopBookController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/booklist', [Bookcontroller::class, 'index'])->name('booklist.index');

Route::get('/search', [Bookcontroller::class, 'search']);


Route::get('/top10', [TopBookController::class, 'index']);

Route::get('/ratings', [RatingController::class, 'index'])->name('ratings.index');
Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');


