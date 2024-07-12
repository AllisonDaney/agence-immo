<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\AuthController;

$idRegx = '[0-9]+';
$slugRegx = '[0-9a-z\-]+';

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/biens', [PropertyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}', [PropertyController::class, 'show'])->name('property.show')->where([
    'property'=>$idRegx, 
    'slug'=>$slugRegx
]);


Route::get('/login', [AuthController::class, 'login'])
    ->name('login');


Route::post('/login', [AuthController::class, 'doLogin']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function (){
    Route::resource('property', AdminPropertyController::class)->except(['show']);
});