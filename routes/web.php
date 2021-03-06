<?php

use App\Mail\MensagemTesteMail;
use Illuminate\Support\Facades\Mail;
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

Auth::routes(['verify' => true]); // mail

Route::get('/home', [App\Http\Controllers\TarefaController::class, 'index'])->name('home')->middleware('verified');

Route::get('tarefa/export/{extension}', 'App\Http\Controllers\TarefaController@export')->name('tarefa.export');
Route::get('tarefa/exportPDF', 'App\Http\Controllers\TarefaController@exportPDF')->name('tarefa.exportPDF');

Route::resource('/tarefa', 'App\Http\Controllers\TarefaController');

Route::get('/mensagem-teste', function () {
    return new MensagemTesteMail();
    // Mail::to('thiago.v1337@gmail.com')->send(new MensagemTesteMail);
    // return 'email enviado';
});
// Route::resource('/tarefa', 'App\Http\Controllers\TarefaController')->middleware('auth');

