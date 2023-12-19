<?php

// use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\FriendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/', [LoginController::class, 'showLogin'])->name('login');
Route::post('/', [LoginController::class, 'login']);

Route::get('/signup', [RegisterController::class, 'showRegister']);
Route::get('/signup', [RegisterController::class, 'sendMajorRegion']);
Route::post('/signup', [RegisterController::class, 'signup']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/profile', [UserController::class, 'profile']);
Route::get('/discover', [HomeController::class, 'showDiscover']);
Route::post('/updateProfile', [UserController::class, 'updateProfile']);
Route::get('/friend', [FriendController::class, 'friend']);
Route::post('/update/status/approved/{id}', [FriendController::class, 'approve']);
Route::post('/update/status/rejected/{id}', [FriendController::class, 'reject']);
Route::post('/request/{id}', [FriendController::class, 'requestFriend']);
Route::post('/update/picture', [UserController::class, 'uploadPhoto']);
Route::get('/delete/picture', [UserController::class, 'deletePhoto']);

Route::group(['middleware' => 'adminauth'], function () {
    Route::get('/dashboard', [HomeController::class, 'showDashboardAdmin']);
    Route::get('/adminMajor', [MajorController::class, 'viewMajor']);
    Route::get('/adminRegion', [RegionController::class, 'viewRegion']);
    Route::get('/adminOrg', [OrgController::class, 'viewOrganization']);
    Route::post('/delete/user/{id}', [UserController::class, 'deleteUser']);
    Route::post('/delete/major/{id}', [MajorController::class, 'deleteMajor']);
    Route::post('/delete/region/{id}', [RegionController::class, 'deleteRegion']);
    Route::post('/delete/org/{id}', [OrgController::class, 'deleteOrg']);
    Route::post('/add/region', [RegionController::class, 'addRegion']);
    Route::post('/add/major', [MajorController::class, 'addMajor']);
    Route::post('/add/org', [OrgController::class, 'addOrganization']);
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
