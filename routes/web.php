<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Front\PageViewController;

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

Route::get('/', [PageViewController::class, 'index'])->name('home');
Route::get('/details/{id}', [PageViewController::class, 'pageDetails'])->name('details');
Route::get('/cat-details/{id}', [PageViewController::class, 'catDetails'])->name('cat-details');
Route::get('/category/{id}', [PageViewController::class, 'pageCategory'])->name('category');
Route::get('/slider-details/{id}', [PageViewController::class, 'sliderDetails'])->name('slider-details');
Route::get('/search', [PageViewController::class, 'search'])->name('search');
Route::get('/special-news', [PageViewController::class, 'specialNews'])->name('special-news');
Route::get('/recent-news', [PageViewController::class, 'recentNews'])->name('recent-news');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home.dashboard');
    })->name('dashboard');
});
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

//    category Modules

    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('new-category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/change-status-category/{id}', [CategoryController::class, 'changeStatusCategory'])->name('change-status-category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    //    News Blog Modules

    Route::get('/add-news', [NewsController::class, 'addNews'])->name('add-news');
    Route::post('/new-news', [NewsController::class, 'newNews'])->name('new-news');
    Route::get('/manage-news', [NewsController::class, 'manageNews'])->name('manage-news');
    Route::get('/change-status-news/{id}', [NewsController::class, 'changeStatusNews'])->name('change-status-news');
    Route::get('/edit-news/{id}', [NewsController::class, 'editNews'])->name('edit-news');
    Route::post('/update-news/{id}', [NewsController::class, 'updateNews'])->name('update-news');
    Route::get('/delete-news/{id}', [NewsController::class, 'deleteNews'])->name('delete-news');

    //    Slider Modules

    Route::get('/add-slider', [SliderController::class, 'addSlider'])->name('add-slider');
    Route::post('/new-slider', [SliderController::class, 'newSlider'])->name('new-slider');
    Route::get('/manage-slider', [SliderController::class, 'manageSlider'])->name('manage-slider');
    Route::get('/change-status-slider/{id}', [SliderController::class, 'changeStatusSlider'])->name('change-status-slider');
    Route::get('/edit-slider/{id}', [SliderController::class, 'editSlider'])->name('edit-slider');
    Route::post('/update-slider/{id}', [SliderController::class, 'updateSlider'])->name('update-slider');
    Route::get('/delete-slider/{id}', [SliderController::class, 'deleteSlider'])->name('delete-slider');

    //    Logo Modules

    Route::get('/add-logo', [LogoController::class, 'addLogo'])->name('add-logo');
    Route::post('/new-logo', [LogoController::class, 'newLogo'])->name('new-logo');
    Route::get('/manage-logo', [LogoController::class, 'manageLogo'])->name('manage-logo');
    Route::get('/change-status-logo/{id}', [LogoController::class, 'changeStatusLogo'])->name('change-status-logo');
    Route::get('/edit-logo/{id}', [LogoController::class, 'editLogo'])->name('edit-logo');
    Route::post('/update-logo/{id}', [LogoController::class, 'updateLogo'])->name('update-logo');
    Route::get('/delete-logo/{id}', [LogoController::class, 'deleteLogo'])->name('delete-logo');

});


