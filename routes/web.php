<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\Manager\ManagerController;

use App\Http\Controllers\Backend\NoticeController;
use App\Http\Controllers\Backend\FeaturedContentController;
use App\Http\Controllers\Backend\AboutContentController;
use App\Http\Controllers\Backend\AboutServiceController;


use App\Http\Controllers\Backend\SystemSettingsController;
use App\Http\Controllers\Backend\GreatDealsController;

use App\Http\Controllers\Backend\AppBannerController;

use App\Http\Controllers\Backend\TermController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\CompanyTypeController;
use App\Http\Controllers\Backend\CompanyDocumentTypeController;
use App\Http\Controllers\Backend\CountryController;



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
Route::get('/terms', [HomepageController::class, 'terms']);



Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::post('/user/company/store', [UserController::class, 'store'])->name('store-company');
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

    Route::get('/admin/edit-app-banner', [AppBannerController::class, 'index']);
    Route::post('/admin/edit-app-banner', [AppBannerController::class, 'updateBanner'])->name('edit-app-banner');

    Route::get('/admin/terms', [TermController::class, 'index'])->name('term-index');
    Route::get('/admin/new-term', function () {
        return view('backend.superadmin.pages.terms.new-term');
    });
    Route::post('/admin/new-term', [TermController::class, 'storeTerm'])->name('new-term');
    Route::get('/admin/edit-terms/{id}', [TermController::class, 'viewEditTerm']);
    Route::post('/admin/edit-term', [TermController::class, 'editTerm'])->name('edit-term');
    Route::get('/admin/delete-term/{id}', [TermController::class, 'deleteTerm']);

    Route::get('/admin/companies', [CompanyController::class, 'index'])->name('companies');
    Route::get('/admin/active-companies', [CompanyController::class, 'indexActive'])->name('active-companies');
    Route::get('/admin/inactive-companies', [CompanyController::class, 'indexInactive'])->name('inactive-companies');
    Route::get('/admin/pending-companies', [CompanyController::class, 'indexPending'])->name('pending-companies');
    Route::get('/admin/company-detail/{id}/{id1}/{id2}', [CompanyController::class, 'companyDetails']);
    Route::get('/admin/new-company', [CompanyController::class, 'newCompany'])->name('new-company');
    Route::post('/admin/new-company', [CompanyController::class, 'storeCompany'])->name('store-new-company');
    Route::get('/admin/edit-company/{id}', [CompanyController::class, 'editCompany']);
    Route::post('/admin/edit-company', [CompanyController::class, 'updateCompany'])->name('edit-company');
    Route::get('/admin/delete-company/{id}', [CompanyController::class, 'deleteCompany']);
    Route::get('/admin/activate-company/{id}', [CompanyController::class, 'activateCompany']);
    Route::get('/admin/deactivate-company/{id}', [CompanyController::class, 'deactivateCompany']);

    Route::get('/admin/company-document-types', [CompanyDocumentTypeController::class, 'viewTypes'])->name('company-document-types');
    Route::get('/admin/new-company-document-type', function () {
        return view('backend.superadmin.pages.company.document-type.new-document-type');
    });
    Route::post('/admin/new-company-document-type', [CompanyDocumentTypeController::class, 'store'])->name('store-new-company-document-type');
    Route::get('/admin/edit-company-document-type/{id}', [CompanyDocumentTypeController::class, 'viewEditType']);
    Route::post('/admin/edit-company-document-type', [CompanyDocumentTypeController::class, 'editType'])->name('edit-company-document-type');
    Route::get('/admin/delete-company-document-type/{id}', [CompanyDocumentTypeController::class, 'deleteType']);

    Route::get('/admin/company-types', [CompanyTypeController::class, 'viewTypes'])->name('company-types');
    Route::get('/admin/new-company-type', function () {
        return view('backend.superadmin.pages.company.type.new-company-type');
    });
    Route::post('/admin/new-company-type', [CompanyTypeController::class, 'store'])->name('store-new-company-type');
    Route::get('/admin/edit-company-type/{id}', [CompanyTypeController::class, 'viewEditType']);
    Route::post('/admin/edit-company-type', [CompanyTypeController::class, 'editType'])->name('edit-company-type');
    Route::get('/admin/delete-company-type/{id}', [CompanyTypeController::class, 'deleteType']);

    Route::get('/admin/countries', [CountryController::class, 'viewCountries'])->name('countries');
    Route::get('/admin/new-country', function () {
        return view('backend.superadmin.pages.company.countries.new-country');
    });
    Route::post('/admin/new-country', [CountryController::class, 'store'])->name('store-new-country');
    Route::get('/admin/edit-country/{id}', [CountryController::class, 'viewEditCountry']);
    Route::post('/admin/edit-country', [CountryController::class, 'editCountry'])->name('edit-country');
    Route::get('/admin/delete-country/{id}', [CountryController::class, 'deleteCountry']);
});

/*------------------------------------------
-----------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/manager/company-detail/{id}', [ManagerController::class, 'companyDetails']);
    Route::post('', [ManagerController::class, 'newDocument'])->name('new.company.document');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
