<?php

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

use Illuminate\Support\Facades\Route;

Route::prefix('blog')->group(function () {
    Route::prefix('post')->group(function () {
        Route::post('/', 'Post\PostController@store');
        Route::get('/list', 'Post\PostController@getPosts');
        Route::get('/{slugOrId}', 'Post\PostController@getPost');
    });

    Route::prefix('category')->group(function () {
        Route::get('/list', 'Category\PostCategoryController@getCategories');
    });

    Route::prefix('author')->group(function () {
        Route::get('/filter', 'Author\AuthorController@filter');
    });

    Route::get('/search/{needle}', 'Search\SearchController@search');
});
