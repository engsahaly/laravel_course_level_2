<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// dump('stage 10');

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

Route::get('/', HomeController::class)->name('mahmoud route');
// Route::get('/', HomeController::class)->middleware(['throttle:watch_limiter'])->name('mahmoud route');

// Route::get('/users/{id}', HomeController::class);
// Route::get('/suppliers/{id}', HomeController::class);
// Route::get('/products/{id}', HomeController::class);


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale() . '/dashboard',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        // dd(request()->segment(1));

        // ==================================== dashboard main page
        // Route::view('/', 'dashboard')->name('dashboard')->withoutMiddleware('auth');
        Route::view('/', 'dashboard')->name('dashboard');

        // ============================================= products
        // Route::get('products/show/{product:slug}', [ProductController::class, 'show'])->name('products.show');
        // Route::resource('products', ProductController::class)->except('show')->parameters(['products' => 'product:slug']);
        Route::get('products/show/{product}', [ProductController::class, 'show'])->name('products.show');
        Route::resource('products', ProductController::class)->except('show');
    }
);

// Route::prefix('{locale}/dashboard')->middleware('setLocale')->group(function () {
//     // dd(request()->segment(1));

//     // ==================================== dashboard main page
//     // Route::view('/', 'dashboard')->name('dashboard')->withoutMiddleware('auth');
//     Route::view('/', 'dashboard')->name('dashboard');

//     // ============================================= products
//     // Route::get('products/show/{product:slug}', [ProductController::class, 'show'])->name('products.show');
//     // Route::resource('products', ProductController::class)->except('show')->parameters(['products' => 'product:slug']);
//     Route::get('products/show/{product}', [ProductController::class, 'show'])->name('products.show');
//     Route::resource('products', ProductController::class)->except('show');
// })->where('locale', '[a-z](2)');


Route::fallback(function () {
    return to_route('mahmoud route');
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

// require __DIR__ . '/admin.php';
// require __DIR__ . '/merchant.php';
