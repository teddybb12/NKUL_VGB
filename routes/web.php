<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class, 'accueil']);

Route::get('/home', [PageController::class, 'home'])->name('home');

Route::get('/home_enquetteur', [PageController::class, 'home2'])->name('home2');

Route::post('auth', [AuthController::class, 'login'])->name('login');

Route::post('deconnexion', [AuthController::class, 'logout'])->name('logout');

Route::resource('gestion_enquete', InfoController::class);

Route::get('ajouter_une_enquette', [InfoController::class, 'form_enquette'])->name('form_enquette');

Route::get('liste_des_enquettes', [InfoController::class, 'list_enquette'])->name('list_enquette');

Route::post('Enregistrement', [InfoController::class, 'store2'])->name('store2');

Route::get('destroyInfo/{id}', [InfoController::class, 'destroy']);

Route::get('print_info/{id}', [InfoController::class, 'print']);

Route::get('print_info2/{id}', [InfoController::class, 'print2']);

Route::resource('gestion_users', UserController::class);

Route::get('my_profile_user', [UserController::class, 'profile'])->name('profile_user');

Route::get('my_profile_admin', [UserController::class, 'profileadmin'])->name('profile_admin');

Route::get('destroyUser/{id}', [UserController::class, 'destroy']);

Route::get('export_data', [InfoController::class, 'export_data'])->name('export_data');
