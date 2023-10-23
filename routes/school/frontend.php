<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\School\Frontend\SearchController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [SearchController::class, 'STView'])->name('st');

Route::get('/results', [SearchController::class, 'RSView'])->name('rs');