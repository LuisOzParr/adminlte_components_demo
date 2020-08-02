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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('form', 'FormController')->only('index');


Route::resource('form', 'FormController')->only('index');

Route::resource('input', 'InputController')->only('index');

Route::resource('select', 'SelectController')->only('index');

Route::resource('textarea', 'TextareaController')->only('index');

Route::resource('card', 'CardController')->only('index');

Route::resource('modal', 'ModalController')->only('index');

Route::resource('tabs', 'TabsController')->only('index');

Route::resource('info-box', 'InfoBoxController')->only('index');

Route::resource('callout', 'CalloutController')->only('index');


Route::resource('dropdown', 'DropdownController')->only('index');
