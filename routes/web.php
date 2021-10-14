<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

// Route::group([
//   'middleware' => 'roles',
//   'roles' => ['Admin', 'Moderator']
// ], function () {
//       Route::get('/pages',[
//         'uses' => 'App\Http\Controllers\PagesController@index',
//         'as' => '{pages.index}'
//       ]);
// });

Route::get('/pages', 'App\Http\Controllers\PagesController@index');

Route::get('/', function () {
    return redirect('/pages');
});

Route::get('/pages/create',[
  'uses' => 'App\Http\Controllers\PagesController@create',
  'as' => 'pages.create'
]);

//Route::post('/pages/store', 'App\Http\Controllers\PagesController@store');
Route::post('/pages/store',[
  'uses' => 'App\Http\Controllers\PagesController@store',
  'as' => 'pages.store'
]);

Route::get('/pages/edit/{page}',[
  'uses' => 'App\Http\Controllers\PagesController@edit',
  'as' => 'pages.edit'
]);

Route::post('/pages/update/{page}',[
  'uses' => 'App\Http\Controllers\PagesController@update',
  'as' => 'pages.update'
]);

Route::delete('/pages/delete/{page}',[
  'uses' => 'App\Http\Controllers\PagesController@delete',
  'as' => 'pages.delete'
]);

//Route::resource('pages', 'App\Http\Controllers\PagesController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
