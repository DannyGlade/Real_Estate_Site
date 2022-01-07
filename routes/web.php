<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthCheck;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//User Controller
Route::get('/', [UserController::class, 'sessionManager'])->name('userHome');

Route::get('/signup', [UserController::class, 'signupForm']);
Route::post('/signup', [UserController::class, 'signup']);

Route::get('/login', [UserController::class, 'loginForm']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);


//AdminPanel starts here
Route::get('/admin/login', [AdminController::class, 'loginPage'])->name('AdminLoginPage');
Route::post('/admin/login', [AdminController::class, 'login']);

Route::middleware([AuthCheck::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('AdminHome');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('AdminLogout');

    //Category
    Route::get('/admin/category', [AdminController::class, 'list_category'])->name('list_category');
    Route::get('/admin/category/add', [AdminController::class, 'add_category'])->name('add_category');
    Route::post('/admin/category/add', [AdminController::class, 'category_added'])->name('category_added');

    Route::get('/admin/category/{id}/del', [AdminController::class, 'del_category'])->name('del_category');
    Route::get('/admin/category/{id}/edit', [AdminController::class, 'edit_category'])->name('edit_category');
    Route::post('/admin/category/{id}/edit', [AdminController::class, 'category_edited'])->name('category_edited');
    //End Category

    //cities starts
    Route::get('/admin/cities', [AdminController::class, 'list_cities'])->name('list_cities');
    Route::get('/admin/cities/add', [AdminController::class, 'add_cities'])->name('add_cities');
    Route::post('/admin/cities/add', [AdminController::class, 'cities_added'])->name('cities_added');

    Route::get('/admin/cities/{id}/del', [AdminController::class, 'del_cities'])->name('del_cities');
    Route::get('/admin/cities/{id}/edit', [AdminController::class, 'edit_cities'])->name('edit_cities');
    Route::post('/admin/cities/{id}/edit', [AdminController::class, 'cities_edited'])->name('cities_edited');
    //cities ends

    //Facilities starts
    Route::get('/admin/facilities', [AdminController::class, 'list_facilities'])->name('list_facilities');
    Route::get('/admin/facilities/add', [AdminController::class, 'add_facilities'])->name('add_facilities');
    Route::post('/admin/facilities/add', [AdminController::class, 'facilities_added'])->name('facilities_added');

    Route::get('/admin/facilities/{id}/del', [AdminController::class, 'del_facilities'])->name('del_facilities');
    Route::get('/admin/facilities/{id}/edit', [AdminController::class, 'edit_facilities'])->name('edit_facilities');
    Route::post('/admin/facilities/{id}/edit', [AdminController::class, 'facilities_edited'])->name('facilities_edited');
    //Facilities ends
});
