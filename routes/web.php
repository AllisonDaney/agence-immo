<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;

$idRegx = '[0-9]+';
$slugRegx = '[0-9a-z\-]+';

Route::get('/', [HomeController::class, 'index']);
Route::get('/biens', [PropertyController::class, 'index'])->name('property.index');
Route::get('/biens/{slug}-{property}', [PropertyController::class, 'show'])->name('property.show')->where([
    'property'=>$idRegx, 
    'slug'=>$slugRegx
]);

Route::prefix('admin')->name('admin.')->group(function (){
    Route::resource('property', AdminPropertyController::class);
});