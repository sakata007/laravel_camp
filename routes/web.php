<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComponentTestController;
use App\Http\Controllers\LifeCycleTestController;
use App\Http\Controllers\ProductImageController;
use App\Models\ProductImage;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/component-test1', [ComponentTestController::class, 'showComponent1']);
// Route::get('/component-test2', [ComponentTestController::class, 'showComponent2']);
// Route::get('/servicecontainer-test', [LifeCycleTestController::class, 'showServiceContainerTest']);
// Route::get('/serviceprovider-test', [LifeCycleTestController::class, 'showServiceProviderTest']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('product-image', ProductImageController::class)
// ->middleware('auth');
Route::prefix('product-image')->group(function() {
    Route::get('/', [ProductImageController::class, 'index'])->name('product-image.index');
    Route::get('/create', [ProductImageController::class, 'create'])->name('product-image.create');
    Route::post('/', [ProductImageController::class, 'store'])->name('product-image.store');
    // Route::get('/{product-image}', [ProductImageController::class, 'show'])->name('product-image.show');
    Route::get('/{product-image}', [ProductImageController::class, 'edit'])->name('product-image.edit');
});

require __DIR__.'/auth.php';
