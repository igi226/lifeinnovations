<?php

use App\Http\Controllers\User\AboutUs\AboutUsController;
use App\Http\Controllers\User\Index\IndexController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', function () {
    return "user";
});
Route::get("/", [IndexController::class, "index"])->name("index");
Route::get("subcategories-wise-post", [IndexController::class, "subcategoriesWisePost"])->name("subcategoriesWisePost");
Route::get("about-us", [AboutUsController::class, "aboutUs"])->name("aboutUs");
Route::get("services-we-offer", [AboutUsController::class, "serviceWeOffer"])->name("serviceWeOffer");
Route::get("contact-us", [AboutUsController::class, "contactUs"])->name("contactUs");
Route::post("contact-us-form", [AboutUsController::class, "enqueryForm"])->name("enqueryForm");
