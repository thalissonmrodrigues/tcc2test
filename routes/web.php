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

// Home.
Route::get('/', function () {
    return view('home');
})->name('home');

// Login.
Route::get('/login', function () {
    return view('login');
})->name('login');

// Works.
Route::get('/trabalhos', function () {
    return view('listing.trabalhos');
})->name('listagem.trabalhos');

Route::get('/trabalhos/{id}', function () {
    return view('form.visualiza-trabalho');
})->name('visualiza.trabalho');

// Subjects.
Route::get('/materias', function () {
    return view('listing.materias');
})->name('listagem.materias');

// Teachers.
Route::get('/professores', function () {
    return view('listing.professores');
})->name('listagem.professores');

// Students.
Route::get('/alunos', function () {
    return view('listing.alunos');
})->name('listagem.alunos');

// Rooms.
Route::get('/salas', function () {
    return view('listing.salas');
})->name('listagem.salas');

Route::get('/salas/{id}/informacoes', function () {
    return view('listing.sala-informacoes');
})->name('listagem.sala.informacoes');
