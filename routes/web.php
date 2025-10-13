<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportsController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/report-list', [ReportsController::class, 'list'])->name('reports.list');
Route::get('/report-new', [ReportsController::class, 'create'])->name('reports.new');
Route::post('/report', [ReportsController::class, 'store'])->name('reports.store');
Route::get('/report/{id}', [ReportsController::class, 'show'])->name('reports.show');
// Route::get('/report-list', function () { return view('reports/report-list'); })->name('report-list');
// Route::get('/report-new', function () { return view('reports/report-new'); })->name('report-new');
