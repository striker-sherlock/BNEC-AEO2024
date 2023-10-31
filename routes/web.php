<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PaymentProviderController;
use App\Http\Controllers\SlotRegistrationController;
use App\Http\Controllers\UserCompetitionPaymentController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [LoginController::class, 'showAdminLoginForm'])->name('login');
    Route::post('login/auth', [LoginController::class, 'adminLogin'])->name('login-auth');
    Route::get('dashboard', [DashboardController::class, 'showAdminDashboard'])->name('dashboard');
});	

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/dashboard/step-{step}', [DashboardController::class, 'step'])->name('dashboard.step');

Route::resource('payment-providers', PaymentProviderController::class);

Route::controller(SlotRegistrationController::class)->prefix('slot-registrations')->name('slot-registrations.')->group(function () {
    Route::get('confirm/{competitionSlot}', 'confirm')->name('confirm');
    Route::get('pending/{competitionSlot}', 'pending')->name('pending');
    Route::get('reject/{competitionSlot}', 'reject')->name('reject');
    Route::get('cancel/{competitionSlot}', 'cancel')->name('cancel');
    Route::get('create-others', 'createOthers')->name('create-other');
    Route::get('export', 'export')->name('export');
});
Route::resource('slot-registrations', SlotRegistrationController::class);

Route::get('/payments/create/{id}', [UserCompetitionPaymentController::class, 'create'])->name('competition-payments.create');
Route::post('/payments/store', [UserCompetitionPaymentController::class, 'store'])->name('competition-payments.store');