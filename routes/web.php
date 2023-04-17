<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Cms\CmsController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
| Here is where you can register web admin routes for your application.
|
*/


Route::get('/login', [AuthController::class, 'loginForm'])->name('admin.login');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin.loggedin');
Route::get('/forgot-password', [AuthController::class, 'forgotPasword'])->name('admin.forgotPasword');
Route::post('/get-password-mail', [AuthController::class, 'getPaswordMail'])->name('admin.getPaswordMail');
Route::group(['middleware' => ["admin"]], function () {
    //profile
    Route::get('admin-profile', [DashboardController::class, 'adminProfile'])->name('admin.adminProfile');
    Route::post('admin-profile', [DashboardController::class, 'adminProfileUpdate'])->name('admin.profile');
    Route::get('admin-change-password', [DashboardController::class, 'adminChangePassword'])->name('admin.adminChangePassword');
    Route::post('admin-password', [DashboardController::class, 'changePassword'])->name('admin.changePassword');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('siteSettings', [DashboardController::class, 'siteSettings'])->name('admin.siteSettings');
    Route::post('siteSettingsUpdate', [DashboardController::class, 'siteSettingsUpdate'])->name('admin.siteSettingsUpdate');
    Route::get('log-out', [AuthController::class, 'adminLogout'])->name('admin.logout');

    Route::resource('users', UserController::class);
    Route::post('users/changeS', [UserController::class, 'changeUserS']);
    Route::resource('categories', CategoryController::class);
    Route::delete('subcategoryDestroy', [CategoryController::class, 'subcategoryDestroy'])->name("subcategory.destroy");
    Route::resource('posts', PostController::class);
    Route::get('post-subcategories', [PostController::class, 'postSubcategories']);
    Route::get('cms-create', [CmsController::class, 'cmsCreate'])->name('cms.create');
    Route::post('cms-store', [CmsController::class, 'cmsstore'])->name('cms.store');
    Route::get('cms-aboutus', [CmsController::class, 'cmsAboutus'])->name('cms.aboutus');
    Route::get('cms-services', [CmsController::class, 'cmsServices'])->name('cms.services');
    Route::get('cms-show/{slug}', [CmsController::class, 'showCms'])->name('cms.show');
    Route::post('cms-edit/{slug}', [CmsController::class, 'cmsEdit'])->name('cms.edit');
    Route::get('enquiries', [CmsController::class, 'showEnquiries'])->name('showEnquiries');
    Route::delete('enquiries/{id}', [CmsController::class, 'deleteEnquiries'])->name('deleteEnquiries');
    
    Route::delete('contentDestroy', [PostController::class, 'contentDestroy'])->name("content.destroy");

    

});

