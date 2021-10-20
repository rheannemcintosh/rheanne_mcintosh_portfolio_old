<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ExperienceDetailController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Register the web routes for rheannemcintosh.com. Web routes which are yet
| to be developed are currently commented out. These routes are loaded by
| the RouteServiceProvider within a group which contains the "web"
| middleware group.
|
*/

/*
 * Rheanne McIntosh Home Page Routes
 */
Route::get('/', [HomePageController::class, 'index']);
Route::redirect('/home', '/');

/*
 * CV Routes
 */
Route::get('/cv', [CVController::class, 'index']);
//Route::get('/cv/summary', [CVController::class, 'summary']);
//Route::get('/cv/skills', [SkillController::class, 'index']);
//Route::get('cv/experiences', [ExperienceController::class, 'index']);
//Route::get('/cv/education', [EducationController::class, 'index']);
//Route::get('cv/personal_development', [\App\Http\Controllers\PersonalDevelopmentController::class, 'index']);
//Route::get('/cv/certificates', [CertificateController::class, 'index']);
//Route::get('/cv/links', [LinkController::class, 'index']);

/*
 * Portfolio
 */
Route::get('/portfolio', [PortfolioController::class, 'index']);

/*
 * Contact Page Routes
 */
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'storeContactMessage']);

/*
 * Blog Routes
 */
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show']);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';
