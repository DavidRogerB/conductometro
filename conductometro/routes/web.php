<?php

use App\Http\Controllers\ContactFormSubmissionController;
use App\Http\Controllers\ViewController;
use App\Models\Aula;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ViewController::class, 'landingPage']);

Route::get('/dashboard', [ViewController::class, 'dashboardPage'])->middleware(['auth'])->name('dashboard');

Route::post('/submit/contact-form', [ContactFormSubmissionController::class, 'handleContactFormSubmission']);

Route::post('/submit/aulaPorCriar', [ViewController::class, 'handleCriacaoDeAula']);

Route::post('/submit/consultarAula', [ViewController::class, 'handleConsuladeAula']);

require __DIR__ . '/auth.php';
