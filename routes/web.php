<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoriesController;
use App\Http\Livewire\ProductsController;
use App\Http\Livewire\CoinsController;
use App\Http\Livewire\PermisosController;
use App\Http\Livewire\PosController;
use App\Http\Livewire\RolesController;
use App\Http\Livewire\AsignarController;
use App\Http\Livewire\UsersController;
use App\Http\Livewire\CashoutController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categories', CategoriesController::class)->name('categorias');
Route::get('products', ProductsController::class)->name('productos');
Route::get('coins', CoinsController::class)->name('monedas');
Route::get('pos', PosController::class)->name('ventas');
Route::get('roles', RolesController::class)->name('rol');
Route::get('permisos', PermisosController::class)->name('permiso');
Route::get('asignar', AsignarController::class)->name('asig');
Route::get('users', UsersController::class)->name('usuarios');
Route::get('cashout', CashoutController::class)->name('cash');

