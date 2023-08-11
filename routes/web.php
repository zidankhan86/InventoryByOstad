<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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


//pages
Route::get('/',[HomeController::class,'home']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/project',[ProjectController::class,'project']);
Route::get('/resume',[ResumeController::class,'resume']);


//Ajax Route Request
Route::post('/contactStore',[ContactController::class,'contactStore']);

Route::get('/heroData', [HomeController::class,'heroData']);
Route::get('/aboutData', [HomeController::class,'aboutData']);
Route::get('/socialData', [HomeController::class,'socialData']);
Route::get('/projectsData', [ProjectController::class,'projectsData']);
Route::get('/resumeLink', [ResumeController::class,'resumeLink']);
Route::get('/experiencesData', [ResumeController::class,'experiencesData']);
Route::get('/educationData', [ResumeController::class,'educationData']);
Route::get('/skillsData', [ResumeController::class,'skillsData']);
Route::get('/languageData', [ResumeController::class,'languageData']);


