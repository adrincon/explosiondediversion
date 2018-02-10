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

//Rutas del Frontend

  Route::get('/', [
    'as'  =>  'front.index',
    'uses'  =>  'FrontController@index'
  ]);

  Route::get('articles/{slug}', [
    'uses'  =>  'FrontController@viewArticle',
    'as'    =>  'front.view.article'
  ]);

  Route::get('services/{slug}', [
    'uses'  =>  'FrontController@viewService',
    'as'    =>  'front.view.service'
  ]);

//RUTAS PANEL DE ADMINISTRACION

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function(){



      Route::group(['middleware'  =>  'administrador'], function(){
        Route::resource('users', 'UsersController');
        Route::get('users/{id}/destroy', [
            'uses'  =>  'UsersController@destroy',
            'as'    =>  'users.destroy'
          ]);
      });

      Route::get('index', function () {
      return view('admin/index');
      })->name('admin.index');

      Route::resource('categories', 'CategoriesController');
      Route::get('categories/{id}/destroy', [
          'uses'  =>  'CategoriesController@destroy',
          'as'    =>  'categories.destroy'
        ]);

        Route::resource('articles', 'ArticlesController');
        Route::get('articles/{id}/destroy', [
            'uses'  =>  'ArticlesController@destroy',
            'as'    =>  'articles.destroy'
        ]);

        Route::resource('services', 'ServicesController');
        Route::get('services/{id}/destroy', [
            'uses'  =>  'ServicesController@destroy',
            'as'    =>  'services.destroy'
        ]);


  });

Auth::routes();
Route::get('logout', ['as'=> 'logout', 'uses'=>'\App\Http\Controllers\Auth\LoginController@logout']);
Route::get('/admin', 'HomeController@index');
