<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\RelatoriosController;

// chama a tela de login inicialmente com a classe de authetificação programada
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//inicialmente chama a index para renderizar a pagina
Route::get('/cadastro', [ClientesController::class, 'index']);
Route::get('/novocliente',[ClientesController::class,'create'])->name('cliente.create');

//retorna o caminho do relatorio
Route::get('/clientes', [RelatoriosController::class, 'clientes']);
Route::get('/sistema', [RelatoriosController::class, 'sistema']);
Route::get('/saldo', [RelatoriosController::class, 'saldo']);
Route::get('/vendas', [RelatoriosController::class, 'vendas']);
