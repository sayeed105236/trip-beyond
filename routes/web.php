<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomepageController::class, 'index']);
Route::get('/hotels', [HomepageController::class, 'hotels'])->name('hotels');
Route::get('/packages', [HomepageController::class, 'packages'])->name('packages');

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
