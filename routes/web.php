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

/*
Route::get('/', function () {
    return view('welcome');
});
 * 
 */

/*
Route::get('/', function () {
    return view('blog.posts');
});
 * 
 */

Route::get('/', function () {
    return view('blog.posts', ['showDeveloper' => true, 'namePage' => 'blog']);
});

Route::get('/blog', function () {
    return view('blog.posts', ['showDeveloper' => true, 'namePage' => 'blog']);
});

Route::get('/resume', function () {
    return view('resume.resume', ['namePage' => 'resume']);
});

Route::get('/projects', function () {
    return view('projects.projects', ['namePage' => 'projects']);
});

Route::get('/about', function () {
    return view('about.about', ['namePage' => 'about']);
});

Route::get('/blog/post/add', function () {
    return view('blog.post.add', ['namePage' => 'blog']);
});

Route::post('/blog/post/add', function () {
    return view('blog.post.add', ['namePage' => 'blog']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
