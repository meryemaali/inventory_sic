<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Pos\SupplierController;
use App\Http\Controllers\Pos\EntityController;
use App\Http\Controllers\Pos\CategoryController;
use App\Http\Controllers\Pos\ProductController;
use App\Http\Controllers\Pos\ProductEtatController;





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
    return view('welcome');
});


//Admin all Route
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');


});

// Supplier All Route 
Route::controller(SupplierController::class)->group(function () {
    Route::get('/supplier/all', 'SupplierAll')->name('supplier.all');
    Route::get('/supplier/add', 'SupplierAdd')->name('supplier.add');
    Route::post('/supplier/store', 'SupplierStore')->name('supplier.store');
    Route::get('/supplier/edit/{id}', 'SupplierEdit')->name('supplier.edit'); 
    Route::post('/supplier/update', 'SupplierUpdate')->name('supplier.update');
    Route::get('/supplier/delete/{id}', 'SupplierDelete')->name('supplier.delete');


});

// Entity All Route 
Route::controller(EntityController::class)->group(function () {
    Route::get('/entity/all', 'EntityAll')->name('entity.all'); 
    Route::get('/entity/add', 'EntityAdd')->name('entity.add');
    Route::post('/entity/store', 'EntityStore')->name('entity.store');
    Route::get('/entity/edit/{id}', 'EntityEdit')->name('entity.edit');
    Route::post('/entity/update', 'EntityUpdate')->name('entity.update');
    Route::get('/entity/delete/{id}', 'EntityDelete')->name('entity.delete');

});

// Category All Route 
Route::controller(CategoryController::class)->group(function () {
    Route::get('/category/all', 'CategoryAll')->name('category.all'); 
    Route::get('/category/add', 'CategoryAdd')->name('category.add');
    Route::post('/category/store', 'CategoryStore')->name('category.store');
    Route::get('/category/edit/{id}', 'CategoryEdit')->name('category.edit');
    Route::post('/category/update', 'CategoryUpdate')->name('category.update');
    Route::get('/category/delete/{id}', 'CategoryDelete')->name('category.delete');

});

// Product All Route 
Route::controller(ProductController::class)->group(function () {
    Route::get('/product/all', 'ProductAll')->name('product.all'); 
    Route::get('/product/add', 'ProductAdd')->name('product.add');
    Route::post('/product/store', 'ProductStore')->name('product.store');
    Route::get('/product/edit/{id}', 'ProductEdit')->name('product.edit');
    Route::post('/product/update', 'ProductUpdate')->name('product.update');
    Route::get('/product/delete/{id}', 'ProductDelete')->name('product.delete');


});

// Product Etat All Route 
Route::controller(ProductEtatController::class)->group(function () {
    Route::get('/productEtat/all', 'ProductEtatAll')->name('productEtat.all'); 
    Route::get('/productEtat/add', 'productEtatAdd')->name('productEtat.add');
    Route::post('/productEtat/store', 'productEtatStore')->name('productEtat.store');
    Route::get('/productEtat/edit/{id}', 'productEtatEdit')->name('productEtat.edit');
    Route::post('/productEtat/update', 'productEtatUpdate')->name('productEtat.update');
    Route::get('/productEtat/delete/{id}', 'productEtatDelete')->name('productEtat.delete');


});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
