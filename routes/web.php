<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Repositories\PostRepository;
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

Route::get('/', function () {
    return redirect()->route('showFormLogin');
});

Route::prefix('/users')->group(function() {
    Route::get("/",[UserController::class,"index"])->name("users.index");
    Route::get("/{id}/delete",[UserController::class,"delete"])->name("users.delete");
    Route::get("/showFormCreate",[UserController::class,"create"])->name("users.showFormCreate");
    Route::post("/create",[UserController::class,"store"])->name("users.create");
    Route::get("/{id}/detail",[UserController::class,"show"])->name("users.detail");
    Route::get("/{id}/showFromUpdate",[UserController::class,"edit"])->name("users.showFromUpdate");
    Route::post("/update",[UserController::class,"update"])->name("users.update");
});


Route::prefix('/posts')->group(function() {
   Route::get("/",[PostController::class,"index"])->name("posts.list");
   Route::get("/{id}/delete",[PostController::class,"delete"])->name("posts.delete");
   Route::get('/showFormCreate',[PostController::class,"create"])->name("posts.showFormCreate");
   Route::post('/create',[PostController::class,"store"])->name("posts.create");
   Route::get('/{id}/detail',[PostController::class,"show"])->name("posts.detail");
   Route::get('/{id}/showFormUpdate',[PostController::class,"edit"])->name("posts.showFormUpdate");
   Route::post('/update',[PostController::class,"update"])->name("posts.update");
});

Route::get("/showFormLogin",[AuthController::class,"showFormLogin"])->name("showFormLogin");
Route::post("/login",[AuthController::class,"login"])->name("login");
Route::get("/logout",[AuthController::class,"logout"])->name("logout");
Route::get("/showFormSignup",[AuthController::class,"showFormSignUp"])->name("showFormSignup");
Route::post("/signup",[AuthController::class,"register"])->name("signup");
Route::get("/resetPassword",[AuthController::class,"showFormResetPassword"])->name("resetPassword");
Route::post("/newPassword",[AuthController::class,"resetPassword"])->name("newPassword");
