<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationAuthController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\EmailVerificationController;

use Illuminate\Support\Facades\Auth;
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




Route::post('reset-password_without_token', [\App\Http\Controllers\auth\AccountsController::class,'validatePasswordRequest']);
Route::get('reset-password/{token}', [\App\Http\Controllers\auth\AccountsController::class,'resetPassword']);
Route::post('change-passward', [\App\Http\Controllers\auth\AccountsController::class,'changepassward']);
Route::get('reset-password-form', [\App\Http\Controllers\auth\AccountsController::class,'resetpasswordform']);


// veryfiy acount

Route::get('verify-Account/{token}', [RegistrationAuthController::class,'verifyAccount'])->name('verify-account');




Route::get('/language/{id}',[LanguageController::class,'index'])->name('language');

Route::get('account/verify/{token}', [RegistrationAuthController::class, 'verifyAccount'])->name('user.verify');


Route::get('administration/login-administration',[\App\Http\Controllers\Auth\EmployeeRegisterController::class,'showLoginForm'])->name('login-administration');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.submit');
Route::get('/register',[RegistrationAuthController::class,'registration'])->name('register');


Route::post('/register', [RegistrationAuthController::class,'customRegistration'])->name('register.submit');








Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('index');
Route::get('category/{slug}', [\App\Http\Controllers\BlogController::class, 'category'])->name('category');
Route::get('article/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('article.show');
Route::get('article', [\App\Http\Controllers\BlogController::class, 'show_article'])->name('article.search.show');

Route::post('comment', [\App\Http\Controllers\UserController::class, 'comment'])->name('comment.store');

Route::get('search', [\App\Http\Controllers\UserController::class, 'search'])->name('all.search');





Route::get('/page/{url}', function($url){

    $page=\App\Models\Page::where('url',$url)->first();

    return $page;
    return view('user.page',compact($page));
});
