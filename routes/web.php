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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/adiciona-tarefa', 'TarefaController@store')->name('tarefa.store');
Route::get('/tarefas/usuario', 'TarefaController@getTarefasByUser')->name('tarefa.usuario');


Route::get('/painel', 'PainelController@index')->name('painel.index');


Route::post('/banner/store', 'BannerController@store')->name('add.banner');
Route::get('/banners', 'BannerController@getBanners')->name('get.banners');
Route::delete('/banner', 'BannerController@excluir')->name('delete.banners');