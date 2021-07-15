<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ContactControllerFront;
use App\Http\Controllers\dashboard\CategoryContoller;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontSiteController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\PostControllerOld;
use App\Http\Controllers\ForgetPassController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\Authenticate;
use App\Models\Contact;
use Illuminate\Database\Schema\Grammars\ChangeColumn;

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


Route::get('forgetpass',[ForgetPassController::class,'show'])->name('forgetpass');
Route::Post('forgetpass',[ForgetPassController::class,'updatepass'])->name('updatepass');

Route::get('login',[AuthController::class,'login'])->name('login');

Route::post('authenticate',[AuthController::class,'authenticate'])->name('authenticate');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'no_register'])->name('no_register');


Route::get('/',[FrontSiteController::class,'showhome'])->name('index');
 Route::get('/single/{id}',[FrontSiteController::class,'showsingle'])->name('single');
Route::get('/blog',[FrontSiteController::class,'showblog'])->name('blog');
Route::get('/contact',[FrontSiteController::class,'showcontact'])->name('contact');

Route::post('/contactSend',[ContactControllerFront::class,'store'])->name('contactSend');

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('/', [dashboardController::class,'index'])->name('dashboardadmin');
    Route::resource('/user', UserController::class);
    Route::resource('/contact', ContactController::class);
    Route::resource('/update-password',SettingsController::class);

    Route::resource('/post', PostController::class);

});
