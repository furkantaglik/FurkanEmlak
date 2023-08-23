<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::post("/register", [UserController::class, "register"])->name("user.register");
Route::post("/login", [UserController::class, "login"])->name("user.login");
Route::get("/logout", [UserController::class, "logout"])->name("user.logout");

Route::group(['middleware' => 'userware'], function () {

    Route::get("/admin", [AdminController::class, "index"])->name("admin");
    Route::post("/admin", [AdminController::class, "delete"])->name("admin.delete");

    Route::post("/admin/create/", [AdminController::class, "create"])->name("admin.create");
    Route::post("/admin/edit/", [AdminController::class, "edit"])->name("admin.edit");


    Route::get("/admin/create/", [AdminController::class, "createblade"])->name("admin.createblade");
    Route::get("/admin/edit/{ilan_id}", [AdminController::class, "editblade"])->name("admin.editblade");
});

Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/saves", [HomeController::class, "saves"])->name("home.saves");
Route::get("/search", [HomeController::class, "search"])->name("home.search");
Route::get("/filter", [HomeController::class, "filter"])->name("home.filter");
Route::post("/liked", [HomeController::class, "liked"])->name("home.liked");