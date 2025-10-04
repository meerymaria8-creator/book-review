<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bookcontroller;
use \App\Http\Controllers\Reviewcontroller;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/books', [Bookcontroller::class, 'index'])->name('books.index');
Route::get('/books/create', [Bookcontroller::class, 'create'])->name('books.create');
Route::post("/books",[Bookcontroller::class, "store"])->name("books.store");
Route::get('/books/{id}', [Bookcontroller::class, 'show'])->name('books.show');
//الايدي متغير ديناميكي  اي قيمة او رقم يحدده المستخدم في الرابط رح يمر للكنترولير

Route::get('/reviews', [Reviewcontroller::class, 'index'])->name('reviews.index');