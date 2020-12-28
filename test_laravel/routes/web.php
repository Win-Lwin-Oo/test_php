<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// URL Pattern
// -> /resource/action/id
// -> /resource/action/id/sub-resource/sub-action
// -> don't use underscore(_)
// -> use plural case (eg: articles, syudents)
// -> action (eg: add, update, delete, view, detail)
// -> unique identifier (id)

// URL Query
// -> eg: /students?location=ygn&sex=female

Route::get('/', 'ArticleController@index');

Route::get('/articles', 'ArticleController@index');

Route::get('/articles/detail/{id}', 'ArticleController@detail');

Route::post('/articles/detail', function () {
    return 'Article detail';
});

Route::get('/articles/more', function () {
    return redirect()->route('articles.detail'); // call route name to redirect
});

Route::get('/articles/detail', function () {
    return 'Article more detail';
})->name('articles.detail'); // set route name

Route::get('/products', 'Product\ProductController@index'); // take care , not (/) , (\) is right in controler namespace path

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/add', 'ArticleController@add');
Route::post('/articles/add', 'ArticleController@create');
Route::get('/articles/delete/{id}', 'ArticleController@delete');
