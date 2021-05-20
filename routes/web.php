<?php

use Illuminate\Support\Facades\Route;

use App\Models\Book;
use App\Models\Shelf;
use App\Models\Reader;
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
    $books = Book::all();
    return view('home',compact('books'));
});
Route::resource('books', 'App\Http\Controllers\library\PostController');
Route::get('shelves',function (){
    $shelves = Shelf::all();
    return view('shelves',compact('shelves'));
});
Route::resource('shelves', 'App\Http\Controllers\library\ShelfController');
Route::get('readers',function (){
    $readers = Reader::all();
    return view('readers',compact('readers'));
});
Route::resource('readers', 'App\Http\Controllers\library\ReaderController');
