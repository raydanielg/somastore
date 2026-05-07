<?php

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

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SchemesController;
use App\Http\Controllers\LessonPlansController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\Seller\MaterialController;
use App\Http\Controllers\Seller\SalesController;
use App\Http\Controllers\Seller\SettingController;
use App\Http\Controllers\Seller\SubscriptionController;

Route::get('/', function () {
    return view('welcome');
});

// Seller Panel Routes
Route::prefix('seller')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [SellerController::class, 'dashboard'])->name('seller.dashboard');
    
    // Materials
    Route::get('/materials/upload', [MaterialController::class, 'create'])->name('seller.materials.upload');
    Route::get('/materials', [MaterialController::class, 'index'])->name('seller.materials.index');
    
    // Sales & Earnings
    Route::get('/sales', [SalesController::class, 'index'])->name('seller.sales.index');
    Route::get('/withdrawals', [SalesController::class, 'withdrawals'])->name('seller.sales.withdrawals');
    
    // Subscription
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('seller.subscription.index');
    
    // Settings
    Route::get('/settings/profile', [SettingController::class, 'profile'])->name('seller.settings.profile');
});

// Schemes of Work Routes
Route::get('/schemes/secondary', [SchemesController::class, 'secondary'])->name('schemes.secondary');
Route::get('/schemes/primary', [SchemesController::class, 'primary'])->name('schemes.primary');
Route::get('/schemes/nursery', [SchemesController::class, 'nursery'])->name('schemes.nursery');

// Lesson Plans Routes
Route::get('/lesson-plans/secondary', [LessonPlansController::class, 'secondary'])->name('lesson_plans.secondary');
Route::get('/lesson-plans/primary', [LessonPlansController::class, 'primary'])->name('lesson_plans.primary');
Route::get('/lesson-plans/nursery', [LessonPlansController::class, 'nursery'])->name('lesson_plans.nursery');

// Exam Routes
Route::get('/exams/packages', [ExamController::class, 'packages'])->name('exams.packages');
Route::get('/exams/series', [ExamController::class, 'series'])->name('exams.series');
Route::get('/exams/secondary', [ExamController::class, 'secondary'])->name('exams.secondary');
Route::get('/exams/primary', [ExamController::class, 'primary'])->name('exams.primary');
Route::get('/exams/regional', [ExamController::class, 'regional'])->name('exams.regional');
Route::get('/exams/topical', [ExamController::class, 'topical'])->name('exams.topical');
Route::get('/exams/practical', [ExamController::class, 'practical'])->name('exams.practical');

// Subject Notes Route
Route::get('/subject-notes', [NotesController::class, 'index'])->name('notes.index');

// Contact Routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/newsletter/subscribe', [NewsletterController::class, 'store'])->name('newsletter.subscribe');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
