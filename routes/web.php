<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\frontend\AdvertisementController;
use App\Http\Controllers\frontend\CategoriesController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\jobController;
use App\Http\Controllers\frontend\jobpostController;
use App\Http\Controllers\frontend\MatrimonyController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\UserController;
use App\Models\frontend\Categories;
use App\Models\frontend\Jobfind;
use App\Models\User;
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
    return view('index');
});

Route::get('/history', function () {
    return view('layouts.frontend.history.history');
});

Route::get('/history/details', function () {
    return view('layouts.frontend.history.historydetails');
});

Route::get('/job', function () {
    return view('layouts.frontend.job.job');
});

Route::get('/about', function () {
    return view('layouts.frontend.about.about');
});

Route::get('/team', function () {
    return view('layouts.frontend.team.team');
});

Route::get('/service/classified', function(){
    return view('layouts.frontend.service.classified');
});

Route::get('/service/government', function(){
    return view('layouts.frontend.service.government');
});

Route::get('service/government/details', function(){
    return view('layouts.frontend.service.governmentdetails');
});

Route::get('service/matrimony', function(){
    return view('layouts.frontend.matrimony.matrimony');
});

Route::get('/gallery', function(){
    return view('layouts.frontend.gallery.gallery');
});

Route::get('/gallery/details', function(){
    return view('layouts.frontend.gallery.gallerydetails');
});


Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admins.layouts.index');
})->name('dashboard');

// User Controller
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');

Route::post('/admin/profile/update', [AdminController::class, 'adminProfileUpdate'])->name('admin_profile.update');

Route::post('/admin/password/update', [AdminController::class, 'adminPasswordUpdate'])->name('admin_password.update');
//////////////

// Admin Categories
Route::get('/admin/categories', [CategoriesController::class, 'categories'])->name('admin.categories');

Route::post('/admin/addCategories', [CategoriesController::class, 'addCategories']);

Route::get('/admin/fetchCategories', [CategoriesController::class, 'fetchCategories']);

Route::get('/admin/editCategories/{id}', [CategoriesController::class, 'editCategories']);

Route::post('/admin/updateCategories/{id}', [CategoriesController::class, 'updateCategories']);

Route::get('/admin/deleteCategories/{id}', [CategoriesController::class, 'deleteCategories']);

Route::get('/admin/checkCname/{cname}', [CategoriesController::class, 'checkCname']);


// Admin Gallery
Route::get('/admin/gallery', [GalleryController::class, 'gallery'])->name('admin.gallery');

Route::post('/admin/addGallery', [GalleryController::class, 'addGallery']);


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('layouts.index');
})->name('dashboard');

// User Logout
Route::get('/logout', [UserController::class, 'userLogout'])->name('user.logout');

Route::get('/profile', [UserController::class, 'userProfile'])->name('user.profile');

Route::post('/update/profile', [UserController::class, 'profileUpdate'])->name('user_profile.update');

Route::post('/update/password', [UserController::class, 'passwordUpdate'])->name('user_password.update');


// User Advertisement
Route::get('/advertisement/add', [AdvertisementController::class, 'addAdvertisement'])->name('user.advertisement');

Route::post('/addAdvertisement', [AdvertisementController::class, 'addNewAdvertisement']);

Route::get('/advertisement/list', [AdvertisementController::class, 'listAdvertisement'])->name('user.advertisementlist');

Route::get('/fetchAdvertisement', [AdvertisementController::class, 'fetchAdvertisement']);

Route::get('/editAdvertisement/{id}', [AdvertisementController::class, 'editAdvertisement']);

Route::post('/updateAdvertisement/{id}', [AdvertisementController::class, 'updateAdvertisement']);

Route::get('/deleteAdvertisement/{id}', [AdvertisementController::class, 'deleteAdvertisement']);

Route::get('/advertisements/details/{id}', [AdvertisementController::class, 'advertisementDetails']);


// User Job Find
Route::get('/jobfind/add', [jobController::class, 'jobFind'])->name('user.jobfind');

Route::get('/jobfind/list', [jobController::class, 'jobFindList'])->name('user.jobfindlist');

Route::post('/addJobFind', [jobController::class, 'addJobFind']);

Route::get('/fetchJobFind', [jobController::class, 'fetchJobFind']);

Route::get('/pdfView/{id}', [jobController::class, 'pdfView'])->name('user.pdfview');

Route::get('/editJobFind/{id}', [jobController::class, 'editJobFind']);

Route::post('/updateJobFind/{id}', [jobController::class, 'updateJobFind']);

Route::get('/deleteJobFind/{id}', [jobController::class, 'deleteJobFind']);


// User Post Job
Route::get('/jobpost/add', [jobpostController::class, 'jobPost'])->name('user.jobpost');

Route::get('/fetchJobPost', [jobpostController::class, 'fetchJobPost']);

Route::get('/jobpost/list', [jobpostController::class, 'jobPostList'])->name('user.jobpostlist');

Route::post('/addJobPost', [jobpostController::class, 'addJobPost']);

Route::get('/editJobPost/{id}', [jobpostController::class, 'editJobPost']);

Route::post('/updateJobPost/{id}', [jobpostController::class, 'updateJobPost']);

Route::get('/deleteJobPost/{id}', [jobpostController::class, 'deleteJobPost']);

Route::get('/job/details/{id}', [jobpostController::class, 'jobpostDetails']);


// User Services
Route::get('/services/add', [ServicesController::class, 'services'])->name('user.services');

Route::post('/addServices', [ServicesController::class, 'addServices']);

Route::get('/services/list', [ServicesController::class, 'serviceList'])->name('user.serviceslist');

Route::get('/fetchServices', [ServicesController::class, 'fetchServices']);

Route::get('/editServices/{id}', [ServicesController::class, 'editServices']);

Route::post('/updateServices/{id}', [ServicesController::class, 'updateServices']);

Route::get('service/classified/details/{id}', [ServicesController::class, 'serviceDetails']);


// User Matrimony
Route::get('/matrimony/add', [MatrimonyController::class, 'matrimony'])->name('user.matrimony');

Route::post('/addMatrimony', [MatrimonyController::class, 'addMatrimony']);

Route::get('/matrimony/list', [MatrimonyController::class, 'matrimonyList'])->name('user.matrimonylist');

Route::get('/fetchMatrimony', [MatrimonyController::class, 'fetchMatrimony']);

// Categories wise Items
Route::get('/categories/{id}', [HomeController::class, 'categoriesWise']);

Route::get('/categories/{pid}/subcategories/{id}', [HomeController::class, 'subCategoriesWise']);





