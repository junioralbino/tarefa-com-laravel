<?php

use Illuminate\Support\Facades\Route;


Route::get('/',  function(){
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tarefa', 'App\Http\Controllers\tarefaController')->middleware('auth');
