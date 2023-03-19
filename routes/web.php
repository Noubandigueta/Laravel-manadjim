<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use BaconQrCode\Renderer\Color\Rgb;
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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('app_home');

    Route::get('/about','about')->name('app_about');

    Route::get('/contact','contact')->name('app_contact');

    Route::match(['get','post'], '/dashboard', 'dashboard')->middleware('auth')->name('app_dashboard');

    Route::get('/logout', [LoginController::class, 'logout'])
        ->name('app_logout');
});

Route::controller(LoginController::class)->group(function(){
    Route::post('/exist_email','existEmail')
    ->name('app_exist_email');

    Route::match(['get','post'], '/activation_code/{token}','activationCode')
            ->name('app_activation_code');


    Route::get('/user_checker','userChecker')
            ->name('app_user_checker');

    Route::get('/resend_activation_code/{token}','resendActivationCode')
            ->name('app_resend_activation_code');

    Route::get('/activation_account_link/{token}','activationAccountLink')
                ->name('app_activaton_account_link');

    Route::match(['get','post'], '/activation_account_change_email/{token}','ActivationAccountChangeEmail')
                ->name('app_activation_account_change_email');

    Route::match(['get', 'post'], '/forgot_password', 'forgotPassword')->name('app_forgot_password');

    Route::match(['get', 'post'], '/change_password/{token}', 'changePassword')->name('app_change_password');

});

