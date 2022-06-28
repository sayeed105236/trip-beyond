<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;

use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\FeaturedContentController;
use App\Http\Controllers\Backend\AboutContentController;
use App\Http\Controllers\Backend\AboutServiceController;
  

use App\Http\Controllers\Backend\SystemSettingsController;
use App\Http\Controllers\Backend\GreatDealsController;


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

  
Route::get('/', [HomepageController::class, 'index']);
Route::get('/hotels', [HomepageController::class, 'hotels'])->name('hotels');
Route::get('/packages', [HomepageController::class, 'packages'])->name('packages');
Route::get('/notices', [HomepageController::class, 'viewNotices']);
Route::get('/about', [HomepageController::class, 'about'])->name('about');

  

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Super Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/super-admin/home', [HomeController::class, 'superAdminHome'])->name('super.admin.home');

    //great deals
    Route::get('/super-admin/great-deals', [GreatDealsController::class, 'index'])->name('great-deals');
    Route::post('/super-admin/great-deals/store', [GreatDealsController::class, 'store'])->name('store-great-deals');
    Route::post('/super-admin/great-deals/update', [GreatDealsController::class, 'update'])->name('update-great-deals');
    Route::get('/super-admin/great-deals/delete/{id}', [GreatDealsController::class, 'delete']);

    //system settings route

    Route::get('/super-admin/system-settings', [SystemSettingsController::class, 'index'])->name('system-settings');
    Route::post('/super-admin/update-system-settings', [SystemSettingsController::class, 'UpdateSettings'])->name('update-system-settings');
});

/*------------------------------------------
-----------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin/system-settings', function () {
    return view('backend.superadmin.pages.systemSettings');
});

Route::get('/admin/notices', [NoticeController::class, 'viewNotices'])->name('notices');
Route::get('/admin/new-notice', function () {
    return view('backend.superadmin.pages.notices.new-notice');
});
Route::post('/admin/new-notice', [NoticeController::class, 'store'])->name('new-notice');
Route::get('/admin/edit-notice/{id}', [NoticeController::class, 'viewEditNotice']);
Route::post('/admin/edit-notice', [NoticeController::class, 'editNotice'])->name('edit-notice');
Route::get('/admin/delete-notice/{id}', [NoticeController::class, 'deleteNotice']);

Route::get('/admin/features', [FeaturedContentController::class, 'viewFeatures'])->name('features');
Route::get('/admin/new-feature', function () {
    return view('backend.superadmin.pages.feature.new-feature');
});
Route::post('/admin/new-feature', [FeaturedContentController::class, 'store']);
Route::get('/admin/edit-feature/{id}', [FeaturedContentController::class, 'viewEditFeature']);
Route::post('/admin/edit-feature', [FeaturedContentController::class, 'editFeature'])->name('edit-feature');
Route::get('/admin/delete-feature/{id}', [FeaturedContentController::class, 'deleteFeature']);

Route::get('/admin/edit-about', [AboutContentController::class, 'Index']);
Route::post('/admin/about-content', [AboutContentController::class, 'Update'])->name('edit-about-content');
Route::post('/admin/about-service', [AboutServiceController::class, 'StoreOne'])->name('store-about-service');
Route::post('/admin/about-whys', [AboutServiceController::class, 'StoreTwo'])->name('store-about-why');
Route::get('/admin/view-service-content', [AboutServiceController::class, 'viewService']);
Route::get('/admin/view-why-content', [AboutServiceController::class, 'viewWhy']);
Route::get('/admin/edit-service-content', [AboutServiceController::class, 'editService']);
Route::get('/admin/edit-service-content/{id}', [AboutServiceController::class, 'viewEditService']);
Route::post('/admin/edit-service-content', [AboutServiceController::class, 'editService'])->name('edit-service-content');
Route::get('/admin/edit-why-content/{id}', [AboutServiceController::class, 'viewEditWhy']);
Route::post('/admin/edit-why-content', [AboutServiceController::class, 'editWhy'])->name('edit-why-content');
Route::get('/admin/delete-service-content/{id}', [AboutServiceController::class, 'deleteServiceContent']);
Route::get('/admin/delete-why-content/{id}', [AboutServiceController::class, 'deleteWhyContent']);

