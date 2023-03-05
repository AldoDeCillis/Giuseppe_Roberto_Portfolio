<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'showHomepage'])->name('Homepage');
Route::get('/about-me', [PublicController::class, 'showAboutMe'])->name('About_me');
Route::get('/contacts', [PublicController::class, 'showContacts'])->name('Contacts');
Route::post('/contacts/submit', [PublicController::class, 'submitForm'])->name('Submit');

Route::get('/projects', [ProjectController::class, 'showProjectView'])->name('Projects');
Route::get('/projects/project/{id}', [ProjectController::class, 'showProject'])->name('Project');
Route::get('/projects/project-page/{id}', [ProjectController::class, 'showProjectDetailPage'])->name('Project-page');
