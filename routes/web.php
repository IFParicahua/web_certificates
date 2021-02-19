<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\PermitComponent;
use App\Http\Controllers\GeneratePDFController;

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
    // return view('welcome');
    return redirect('login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', IndexComponent::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/permisos', PermitComponent::class)->name('permisos');
Route::get('download-pdf', [GeneratePDFController::class,'downloadPDF'])->name('download.pdf');
Route::get('show-pdf', [GeneratePDFController::class,'showPDF'])->name('show.pdf');
Route::get('view-pdf', [GeneratePDFController::class,'view'])->name('view.pdf');
