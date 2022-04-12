<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Categoria\ShowCategoria;
use App\Http\Livewire\Categoria\CreateCategoria;
use App\Http\Livewire\Categoria\EditCategoria;

use App\Http\Livewire\SubCategoria\ShowSubCategoria;
use App\Http\Livewire\SubCategoria\CreateSubCategoria;
use App\Http\Livewire\SubCategoria\EditSubCategoria;

use App\Http\Livewire\Empresa\ShowEmpresa;
use App\Http\Livewire\Empresa\CreateEmpresa;
use App\Http\Livewire\Empresa\EditEmpresa;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/inventario', function () {
    return view('inventario');
})->name('inventario');




/*=========== CATEGORIA ==========*/

Route::middleware(['auth:sanctum', 'verified'])->get('/categoria', ShowCategoria::class)->name('categoria.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/categoria/create', CreateCategoria::class)->name('categoria.create');
Route::middleware(['auth:sanctum', 'verified'])->get('/categoria/edit/{id}', EditCategoria::class)->name('categoria.edit');


/*=========== subCATEGORIA ==========*/

Route::middleware(['auth:sanctum', 'verified'])->get('/subcategoria', ShowSubCategoria::class)->name('subcategoria.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/subcategoria/create', CreateSubCategoria::class)->name('subcategoria.create');
Route::middleware(['auth:sanctum', 'verified'])->get('/subcategoria/edit/{id}', EditSubCategoria::class)->name('subcategoria.edit');


/*=========== Empresa ==========*/

Route::middleware(['auth:sanctum', 'verified'])->get('/empresa', ShowEmpresa::class)->name('empresa.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/empresa/create', CreateEmpresa::class)->name('empresa.create');
Route::middleware(['auth:sanctum', 'verified'])->get('/empresa/edit/{id}', EditEmpresa::class)->name('empresa.edit');