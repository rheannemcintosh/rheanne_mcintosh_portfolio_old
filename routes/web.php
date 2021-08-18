<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ExperienceDetailController;
use App\Http\Controllers\LinkController;

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

/**
 * Rheanne McIntosh Home Page Routes
 */
Route::get('/', function () {
    return view('home.index');
});

/**
 * About Me / CV Routes
 */
Route::get('/cv', [CVController::class, 'index']);

Route::resource('/experiences', ExperienceController::class);
Route::resource('/experiences/details', ExperienceDetailController::class);

Route::get('/certificatess', [CertificateController::class, 'index']);
Route::get('/education', [EducationController::class, 'index']);
Route::get('/links', [LinkController::class, 'index']);
Route::get('/skills', [SkillController::class, 'index']);

/**
 * Contact Page Routes
 */
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
