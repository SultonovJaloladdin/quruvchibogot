<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/about', 'AboutController@index')->name('about.index');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/projects', 'ProjectsController@index')->name('projects.index');
Route::get('/service', 'ServiceController@index')->name('service.index');
Route::get('/team', 'TeamController@index')->name('team.index');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
