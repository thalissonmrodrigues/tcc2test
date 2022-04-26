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

Route::get('/trabalhos/adiciona', function () {
    return view('form.trabalhos');
})->name('adiciona.trabalhos');

Route::get('/trabalhos/{trabalhos}', function () {
    return view('form.visualiza-trabalho');
})->name('visualiza.trabalho');

Route::get('/trabalhos/{trabalhos}/trabalho/{trabalho}/correcao', function () {
    return view('form.correcao-trabalho');
})->name('correcao.trabalho');

Route::get('/trabalhos/{trabalhos}/tabalho/{trabalho}/visualiza', function () {
    return view('form.visualiza-correcao');
})->name('visualiza.correcao');

// Subjects.
Route::get('/materias', function () {
    return view('listing.materias');
})->name('listagem.materias');

Route::get('/materias/adiciona', function () {
    return view('form.materias');
})->name('adiciona.materias');

// Teachers.
Route::get('/professores', function () {
    return view('listing.professores');
})->name('listagem.professores');

Route::get('/professores/adiciona', function () {
    return view('form.professores');
})->name('adiciona.professores');

// Students.
Route::get('/alunos', function () {
    return view('listing.alunos');
})->name('listagem.alunos');

Route::get('/alunos/adiciona', function () {
    return view('form.alunos');
})->name('adiciona.alunos');

// Rooms.
Route::get('/salas', function () {
    return view('listing.salas');
})->name('listagem.salas');

Route::get('/salas/{id}/informacoes', function () {
    return view('listing.sala-informacoes');
})->name('listagem.sala.informacoes');

Route::get('/salas/adiciona', function () {
    return view('form.salas');
})->name('adiciona.salas');

