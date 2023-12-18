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

Route::get('/', function () {
    if(auth()->user()) {
        return redirect()->route('notes.index');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', function() {
    return redirect()->route('notes.index');
});

Route::get('notes', 'NoteController@index')->name('notes.index');
Route::get('notes/create', 'NoteController@create')->name('notes.create');
Route::post('notes', 'NoteController@store');
Route::get('notes/{note}/edit', 'NoteController@edit');
Route::put('notes/{note}', 'NoteController@update');
Route::delete('notes/{note}', 'NoteController@destroy');
