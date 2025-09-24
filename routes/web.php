<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProjectController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');

Route::view('/company-overview', 'pages.company-overview')->name('company-overview');
Route::view('/vision-mission', 'pages.vision-mission')->name('vision-mission');
Route::view('/core-values', 'pages.core-values')->name('core-values');
Route::view('/leadership-team', 'pages.leadership-team')->name('leadership-team');
Route::view('/manufacturing-facilities', 'pages.manufacturing-facilities')->name('manufacturing-facilities');
Route::view('/sustainability-and-quality-standards', 'pages.sustainability-and-quality-standards')->name('sustainability-quality-standards');
Route::view('/milestone', 'pages.milestone')->name('milestone');
Route::view('/why-choose-us', 'pages.why-choose-us')->name('why-choose-us');

// Products - Each category has its own function with subcategories
Route::get('/aluminium-composite-panels', [HomeController::class, 'aluminiumCompositePanels'])->name('aluminium-composite-panels');
Route::get('/metallic-flair-series', [HomeController::class, 'metallicFlairSeries'])->name('metallic-flair-series');
Route::get('/fire-retardant-acp-panels', [HomeController::class, 'fireRetardantAcpPanels'])->name('fire-retardant-acp-panels');
Route::get('/4mann-hpl', [HomeController::class, 'fourMannHpl'])->name('ahpl');
Route::get('/4mann-honeycomb-panels', [HomeController::class, 'honeycombPanels'])->name('honeycomb-panels');
Route::get('/metafulte-aluminium-composite-louvers', [HomeController::class, 'aluminiumCompositeLouvers'])->name('louvers');
Route::get('/other-building-materials', [HomeController::class, 'otherBuildingMaterials'])->name('other-building');

// Resources, Blog, Projects, Career, Contact
Route::view('/resources', 'pages.resources')->name('resources');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/4man’s-journey19may', 'pages.4man’s-journey19may');
Route::view('/4man’s-journey20may', 'pages.4man’s-journey20may');
Route::view('/4man’s-journey21may', 'pages.4man’s-journey21may');
Route::get('/projects', [ProjectController::class, 'viewProjects'])->name('projects');
Route::get('/project/{slug}', [ProjectController::class, 'viewProjectShowcase'])->name('project-showcase.slug');
Route::get('/get-cities/{state?}', [ProjectController::class, 'getCities'])->name('get.cities');
Route::get('/projects/filter', [ProjectController::class, 'filterProjects'])->name('projects.filter');
Route::view('/project-showcase', 'pages.project-showcase')->name('project-showcase');
Route::view('/career', 'pages.career')->name('career');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/certificate-parter', 'pages.certificate-parter')->name('certificate-parter');
Route::view('/cosmic-chill', 'pages.cosmic-chill')->name('cosmic-chill');
Route::view('/structure', 'pages.structure')->name('structure');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function(){
        return view('admin.login');
    })->name('login');

    Route::post('/', [AdminController::class, 'login'])->name('login.submit');

    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});
    Route::get('/about-us', [AdminController::class, 'aboutUs'])->name('about-us');
});
Route::prefix('admin')->middleware('admin.auth')->group(function () {
    Route::resource('banners', BannerController::class);
    Route::get('/banners/{id}/edit', [BannerController::class, 'edit'])->name('banners.ajax.edit');
Route::post('/banners/update', [BannerController::class, 'updateAjax'])->name('banners.ajax.update');
 Route::get('/subcategory/index',
[App\Http\Controllers\SubCategoryController::class, 'index'])->name('categories.index');
Route::post('/store',[App\Http\Controllers\SubCategoryController::class, 'store'])->name('subcategory.store');
Route::get('/subcategories/{id}/edit', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('subcategory.edit');
Route::post('/subcategory/update', [BannerController::class, 'update'])->name('subcategory.ajax.update');
Route::get('/products',[productController::class, 'index'])->name('products.index');
Route::post('/products',[productController::class, 'store'])->name('products.store');
Route::get('/get-subcategories/{categoryId?}',[productController::class, 'getSubcategories'])->name('get.subcategories');
Route::get('/products/{id}/edit', [productController::class, 'edit'])->name('products.edit');
Route::post('/products/update', [productController::class, 'update'])->name('products.update');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}/edit', [projectController::class, 'edit'])->name('projects.edit');
Route::post('/projects/update', [projectController::class, 'update'])->name('projects.update');
Route::get('/projects/testimony', [App\Http\Controllers\TestimonyController::class, 'index'])->name('testimony.index');
Route::post('/projests/testimony', [App\Http\Controllers\TestimonyController::class, 'store'])->name('testimony.store');
Route::get('/testimony/{id}/edit', [App\Http\Controllers\TestimonyController::class, 'edit'])->name('testimony.edit');
Route::post('/testimony/update', [App\Http\Controllers\TestimonyController::class, 'update'])->name('testimony.update');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/get-subcategories/{categoryId}',[HomeController::class, 'getSubcategories'])->name('get.subcategories.frontend');

// Subcategory pages
Route::get('/subcategory/{slug}', [HomeController::class, 'subcategoryPage'])->name('subcategory.page');
Route::get('/subcategory-by-id/{id}', [HomeController::class, 'subcategoryPageById'])->name('subcategory.page.by.id');
Route::get('/product/{slug}', [HomeController::class, 'productDetails'])->name('product.details');

Route::post('/check-product-code', [ProductController::class, 'checkProductCode'])->name('check.product.code');

